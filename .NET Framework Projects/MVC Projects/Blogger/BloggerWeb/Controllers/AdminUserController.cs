using BloggerWeb.Models.ViewModals;
using BloggerWeb.Repositories;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Identity;
using Microsoft.AspNetCore.Mvc;

namespace BloggerWeb.Controllers
{
    [Authorize(Roles ="Admin")]
    public class AdminUserController : Controller
    {
        private readonly IUserRepository userRepository;
        private readonly UserManager<IdentityUser> userManager;

        public AdminUserController(IUserRepository userRepository, UserManager<IdentityUser> userManager    )
        {
            this.userRepository = userRepository;
            this.userManager = userManager;
        }

        [HttpGet]
        public async Task<IActionResult> List()
        {
            var users = await userRepository.GetAll();

            var userViewModel = new UserViewModel();
            userViewModel.Users = new List<User>();

            foreach (var user in users) {

                userViewModel.Users.Add(new Models.ViewModals.User
                {
                    Id = Guid.Parse(user.Id),
                    Userame = user.UserName,
                    EmailAddress = user.Email
                });

            }

            return View(userViewModel);
        }

        [HttpPost]
        public async Task<IActionResult> List(UserViewModel request) {

            var identityUser = new IdentityUser
            {
                UserName = request.UserName,
                Email = request.Email,
            };

            var identityResult = await userManager.CreateAsync(identityUser, request.Password);

            if (identityResult != null) {
                if (identityResult.Succeeded) {

                    //assign roles to this user
                    var roles = new List<string> { "User" };

                    if (request.AdminRoleCheckbox) {
                        roles.Add("Admin");
                    }
                    identityResult = await userManager.AddToRolesAsync(identityUser, roles);

                    if (identityResult != null && identityResult.Succeeded) {

                        return RedirectToAction("List", "AdminUser");
                    };


                }

            }

            return View();
           
        }


        [HttpPost]
        public async Task<IActionResult> Delete(Guid id)
        {
            var user = await userManager.FindByIdAsync(id.ToString());

            if (user != null) {
                var identityResult = await userManager.DeleteAsync(user);

                if (identityResult != null && identityResult.Succeeded) {
                    return RedirectToAction("List", "AdminUser");
                }
            }

            return View();
        }
    }
}
