

using BloggerWeb.Models.Domain;

namespace BloggerWeb.Models.ViewModals
{
    public class AddLikeRequest
    {
        public Guid BlogPostId { get; set; }

        public Guid UserId { get; set; }

    }
}
