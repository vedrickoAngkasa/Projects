using BloggerWeb.Data;
using BloggerWeb.Models.Domain;
using BloggerWeb.Models.ViewModals;
using Microsoft.EntityFrameworkCore;

namespace BloggerWeb.Repositories
{
    public class TagRepository : ITagRepository
    {

        private readonly BloggerDBContext bloggerDBContext;

        public TagRepository(BloggerDBContext bloggerDBContext)
        {
            this.bloggerDBContext = bloggerDBContext;
        }
        public async Task<Tag> AddAsync(Tag tag)
        {
            await bloggerDBContext.Tags.AddAsync(tag);
            await bloggerDBContext.SaveChangesAsync();

            return tag;
        }

        public async Task<IEnumerable<Tag>> GetAllAsync()
        {
            return await bloggerDBContext.Tags.ToListAsync();
        }

        public Task<Tag?> GetAsync(Guid id)
        {
           return bloggerDBContext.Tags.FirstOrDefaultAsync(x => x.Id == id);
        }

        public async Task<Tag?> UpdateAsync(Tag tag)
        {
            var existingTag = await bloggerDBContext.Tags.FindAsync(tag.Id);

            if (existingTag != null)
            {
                existingTag.Name = tag.Name;
                existingTag.DisplayName = tag.DisplayName;
                await bloggerDBContext.SaveChangesAsync();

                return existingTag;
            }

            return null;
        }

        public async Task<Tag?> DeleteAsync(Guid id)
        {
           var existingTag = await bloggerDBContext.Tags.FindAsync(id);

            if (existingTag != null) 
            {
                bloggerDBContext.Tags.Remove(existingTag);
                await bloggerDBContext.SaveChangesAsync(); 
                
                return existingTag;
            }

            return null;
        }
    }
}
