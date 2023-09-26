using BloggerWeb.Data;
using BloggerWeb.Models.Domain;

namespace BloggerWeb.Repositories
{
    public class BlogPostCommentRepository : IBlogPostCommentRepository
    {
        private readonly BloggerDBContext bloggerDBContext;

        public BlogPostCommentRepository(BloggerDBContext bloggerDBContext)
        {
            this.bloggerDBContext = bloggerDBContext;
        }
        public async Task<BlogPostComment> AddAsync(BlogPostComment blogPostComment)
        {
            await bloggerDBContext.BlogPostComment.AddAsync(blogPostComment);
            await bloggerDBContext.SaveChangesAsync();
            return blogPostComment;
        }

        public Task<IEnumerable<BlogPostComment>> GetCommentsByBlodIdAsync(Guid blogPostId)
        {
            throw new NotImplementedException();
        }
    }
}
