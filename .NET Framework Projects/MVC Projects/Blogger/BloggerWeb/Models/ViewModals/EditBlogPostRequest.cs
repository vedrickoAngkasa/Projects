﻿using Microsoft.AspNetCore.Mvc.Rendering;

namespace BloggerWeb.Models.ViewModals
{
    public class EditBlogPostRequest
    {

        public Guid Id { get; set; }
        public string Heading { get; set; }
        public string PageTitle { get; set; }
        public string Content { get; set; }
        public string ShortDescription { get; set; }
        public string FeaturedImageUrl { get; set; }
        public string UrlHandle { get; set; }
        public DateTime PublishedDate { get; set; }
        public string Author { get; set; }
        public bool Visible { get; set; }


        //Display tags from database
        public IEnumerable<SelectListItem> Tags { get; set; }

        //Collect Tags

        public string[] SelectedTag { get; set; } = Array.Empty<string>();

    }
}
