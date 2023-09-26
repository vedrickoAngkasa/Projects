using BloggerWeb.Models.Domain;

namespace BloggerWeb.Repositories
{
    public interface IBlogPostCommentRepository
    {
        Task<BlogPostComment> AddAsync(BlogPostComment blogPostComment);
        
        Task<IEnumerable<BlogPostComment>> GetCommentsByBlodIdAsync(Guid blogPostId);
    }
}
