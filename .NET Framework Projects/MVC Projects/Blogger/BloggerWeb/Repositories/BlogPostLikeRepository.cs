using BloggerWeb.Data;
using BloggerWeb.Models.Domain;
using Microsoft.EntityFrameworkCore;

namespace BloggerWeb.Repositories
{
    public class BlogPostLikeRepository : IBlogPostLikeRepository
    {
        private readonly BloggerDBContext bloggerDBContext;

        public BlogPostLikeRepository(BloggerDBContext bloggerDBContext)
        {
            this.bloggerDBContext = bloggerDBContext;
        }

        public async Task<BlogPostLike> AddLikeForBlog(BlogPostLike blogPostLike)
        {
            await bloggerDBContext.BlogPostLike.AddAsync(blogPostLike);
            await bloggerDBContext.SaveChangesAsync();
            return blogPostLike;
        }

        public async Task<IEnumerable<BlogPostLike>> GetLikesForBlog(Guid blogPostId)
        {
            return await bloggerDBContext.BlogPostLike.Where(x => x.BlogPostId == blogPostId).ToListAsync();
        }

        public async Task<int> GetTotalLikes(Guid blogPostId)
        {
            return await bloggerDBContext.BlogPostLike.CountAsync(x => x.BlogPostId == blogPostId);
        }
    }
}
