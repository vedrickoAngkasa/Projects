using Microsoft.VisualStudio.TestTools.UnitTesting;
using Assignment2;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Assignment2.Tests
{
    [TestClass()]
    public class webFunctionTests
    {

        [TestMethod()]
        public void testAdapterClasss()
        {

            adapter testing = new webFunction();
            testing.setName("Adam Test");
            Console.WriteLine("Name: "  + testing.getName());
        }


            [TestMethod()]
        public void testGetterAndSetter()
        {

            adapter testing = new webFunction();
            testing.setName("Adam Test");
            testing.setLat("-32");
            testing.setLng("144");
            testing.setTypeSupport("Volunteer");
            testing.setSupportLevel("Full Time");
            testing.setImages("someone.jpg");

            Console.WriteLine("Details: " + testing.getName() + testing.getLat() + testing.getLng() + testing.getTypeSupport() + testing.getSupportLevel() + testing.getImages());



        }





    }
}