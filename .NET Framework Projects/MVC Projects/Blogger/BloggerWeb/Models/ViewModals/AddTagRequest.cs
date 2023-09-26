using System.ComponentModel.DataAnnotations;

namespace BloggerWeb.Models.ViewModals
{
    public class AddTagRequest
    {
        [Required]
        public string Name { get; set; }
        [Required]

        public string DisplayName { get; set; }
    }
}
