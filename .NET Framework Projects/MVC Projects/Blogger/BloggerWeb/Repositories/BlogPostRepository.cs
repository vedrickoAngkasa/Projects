using BloggerWeb.Data;
using BloggerWeb.Models.Domain;
using Microsoft.EntityFrameworkCore;

namespace BloggerWeb.Repositories
{
    public class BlogPostRepository : IBlogPostRepository
    {
        private readonly BloggerDBContext bloggerDBContext;

        public BlogPostRepository(BloggerDBContext bloggerDBContext)
        {
            this.bloggerDBContext = bloggerDBContext;
        }
        public async Task<BlogPost> AddAsync(BlogPost blogPost)
        {
            await bloggerDBContext.AddAsync(blogPost);
            await bloggerDBContext.SaveChangesAsync();
            return blogPost;
        }

        public async Task<BlogPost?> DeleteAsync(Guid id)
        {
            var existingBlog = await bloggerDBContext.BlogPosts.FindAsync(id);
            if (existingBlog != null)            
            {
                bloggerDBContext.BlogPosts.Remove(existingBlog);
                await bloggerDBContext.SaveChangesAsync();
                return existingBlog;
            }

            return null;
        }

        public async Task<IEnumerable<BlogPost>> GetAllAsync()
        {
            return await bloggerDBContext.BlogPosts.Include(x => x.Tags).ToListAsync();
        }

        public async Task<BlogPost?> GetAsync(Guid id)
        {
            return await bloggerDBContext.BlogPosts.Include(x => x.Tags).FirstOrDefaultAsync(x => x.Id == id);
        }

        public async Task<BlogPost?> GetByUrlHanldeAsync(string urlHandle)
        {
            return await bloggerDBContext.BlogPosts.Include(x => x.Tags).FirstOrDefaultAsync(x => x.UrlHandle == urlHandle);
        }

        public async Task<BlogPost?> UpdateAsync(BlogPost blogPost)
        {
            var existingBlog = await bloggerDBContext.BlogPosts.Include(x => x.Tags).FirstOrDefaultAsync(x => x.Id == blogPost.Id);
            if (existingBlog != null) 
            {
                existingBlog.Id = blogPost.Id;
                existingBlog.Heading = blogPost.Heading;
                existingBlog.PageTitle = blogPost.PageTitle;
                existingBlog.Content = blogPost.Content;
                existingBlog.ShortDescription = blogPost.ShortDescription;
                existingBlog.Author = blogPost.Author;
                existingBlog.FeaturedImageUrl = blogPost.FeaturedImageUrl;
                existingBlog.UrlHandle = blogPost.UrlHandle;
                existingBlog.Visible = blogPost.Visible;
                existingBlog.PublishedDate = blogPost.PublishedDate;
                existingBlog.Tags = blogPost.Tags;

                await bloggerDBContext.SaveChangesAsync();
                return existingBlog;
                   
            }

            return null;
        }
    }
}
