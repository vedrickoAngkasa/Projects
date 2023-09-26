using Microsoft.AspNetCore.Identity;
using Microsoft.AspNetCore.Identity.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore;

namespace BloggerWeb.Data
{
    public class AuthDbContext : IdentityDbContext
    {
        public AuthDbContext(DbContextOptions<AuthDbContext> options) : base(options)
        {

        }


        protected override void OnModelCreating(ModelBuilder builder)
        {
            base.OnModelCreating(builder);

            //Seed Roles (User, Admin, SuperAdmin)

            var adminRoleId = "61475514-35e1-40c5-9f3c-172c279996c8";
            var superAdminRoleId = "869b3d0e-058a-44bd-85c4-62eb420702f9";
            var userRoleId = "a1b951ac-24b1-425c-91a8-26a303457de7";

            var roles = new List<IdentityRole>
            {
                new IdentityRole
                {
                 Name= "Admin",
                 NormalizedName= "Admin",
                 Id = adminRoleId,
                 ConcurrencyStamp = adminRoleId
                },
                new IdentityRole
                {
                 Name= "SuperAdmin",
                 NormalizedName= "SuperAdmin",
                 Id = superAdminRoleId,
                 ConcurrencyStamp = superAdminRoleId

                },
                new IdentityRole
                {
                        Name= "User",
                 NormalizedName= "User",
                 Id = userRoleId,
                 ConcurrencyStamp = userRoleId

                }

            };

            builder.Entity<IdentityRole>().HasData(roles);
            //Seed SuperAdminUser
            var superAdminId = "52582cd6-2099-4a92-acc6-53a46c4180f7";
            var superAdminUser = new IdentityUser
            {
                UserName = "superAdmin@blogger.com",
                Email = "superadmin@blogger.com",
                NormalizedEmail = "superadmin@blogger.com".ToUpper(),
                NormalizedUserName = "superadmin@blogger.com".ToUpper(),
                Id = superAdminId
            };

            superAdminUser.PasswordHash = new PasswordHasher<IdentityUser>().HashPassword(superAdminUser, "Superadmin@123");

            builder.Entity<IdentityUser>().HasData(superAdminUser);
            //Add All roles to SuperAdminUser

            var superAdminRoles = new List<IdentityUserRole<string>>
            {
                new IdentityUserRole<string>{ 
                    RoleId = adminRoleId,
                    UserId = superAdminId

                },
                new IdentityUserRole<string>{
                    RoleId = superAdminRoleId,
                    UserId = superAdminId

                },
                new IdentityUserRole<string>{
                    RoleId = userRoleId,
                    UserId = superAdminId

                }
            };

            builder.Entity<IdentityUserRole<string>>().HasData(superAdminRoles);

        }

    }
}
