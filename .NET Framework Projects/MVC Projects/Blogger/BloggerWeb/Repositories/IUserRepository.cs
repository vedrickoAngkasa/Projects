using Microsoft.AspNetCore.Identity;

namespace BloggerWeb.Repositories
{
    public interface IUserRepository
    {

        Task<IEnumerable<IdentityUser>> GetAll();
    }
}
