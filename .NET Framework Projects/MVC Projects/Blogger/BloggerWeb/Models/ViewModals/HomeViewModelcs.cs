using BloggerWeb.Models.Domain;

namespace BloggerWeb.Models.ViewModals
{
    public class HomeViewModelcs
    {

        public IEnumerable<BlogPost> BlogPosts { get; set; }

        public IEnumerable<Tag> Tags { get; set; }
    }
}
