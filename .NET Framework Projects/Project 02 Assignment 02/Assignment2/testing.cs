using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace Assignment2
{
    public class testing
    {



        static void Main(string[] args)
        {
            adapter testing = new webFunction();
            testing.setName("John Test");
            testing.setLat("-31");
            testing.setLng("144");
            testing.setTypeSupport("Volunteer");
            testing.setSupportLevel("Part Time");
            testing.setImages("someone.jpg");
            testing.writeXML(testing.getName(), testing.getLat(), testing.getLng(), testing.getTypeSupport(), testing.getSupportLevel(), testing.getImages());
            Console.WriteLine("Details: " + testing.getName() + testing.getLat() + testing.getLng() + testing.getTypeSupport() + testing.getSupportLevel() + testing.getImages());


        }
    }

}