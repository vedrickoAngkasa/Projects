using BloggerWeb.Models.Domain;
using Microsoft.EntityFrameworkCore;

namespace BloggerWeb.Data
{
    public class BloggerDBContext: DbContext
    {
        public BloggerDBContext(DbContextOptions<BloggerDBContext> options) : base (options){ 


        }

        public DbSet<BlogPost> BlogPosts{ get; set; }

        public DbSet<Tag> Tags { get; set; }
        public DbSet<BlogPostLike> BlogPostLike { get; set; }
        public DbSet<BlogPostComment> BlogPostComment{ get; set; }
    }
}
