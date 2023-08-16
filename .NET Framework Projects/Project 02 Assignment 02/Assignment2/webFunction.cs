using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Xml;
using System.Xml.Linq;

namespace Assignment2
{
    public class webFunction : adapter
    {

        public static String name;
        public static String lat;
        public static String lng;
        public static String typeSupport;
        public static String supportLevel;
        public static String image;

        public override String getName()
        {
            return name;
        }

        public override void setName(String Name)
        {
            name = Name;
        }


        public override String getLat()
        {
            return lat;
        }

        public override void setLat(String Lat)
        {
            lat = Lat;
        }

        public override String getLng()
        {
            return lng;
        }

        public override void setLng(String Lng)
        {
            lng = Lng;
        }

        public override String getTypeSupport()
        {
            return typeSupport;
        }

        public override void setTypeSupport(String TypeSupport)
        {
            typeSupport = TypeSupport;
        }


        public override String getSupportLevel()
        {
            return supportLevel;
        }

        public override void setSupportLevel(String SupportLevel)
        {
            supportLevel = SupportLevel;
        }

        public override String getImages()
        {
            return image;
        }

        public override void setImages(String Image)
        {
            image = Image;
        }


        public override void writeXML(String Name ,String Lat, String Lng, String typeSupport, String supportLevel, String Image)
        {
            string file = HttpContext.Current.Server.MapPath("~/App_Data/data.xml");

            XDocument doc;

            //Verify whether a file is exists or not
            if (!System.IO.File.Exists(file))
            {
                doc = new XDocument(new XDeclaration("1.0", "UTF-8", "yes"),
                    new System.Xml.Linq.XElement("comments"));
            }
            else
            {
                doc = XDocument.Load(file);
            }

            XElement ele = new XElement("Supporter",
                new XElement("Name", Name,
                new XElement("Lat", Lat,
                new XElement("Long", Lng,
                new XElement("typeSupport", typeSupport,
                new XElement("supportLevel", supportLevel,
                new XElement("image", Image)))))));

            doc.Root.Add(ele);
            doc.Save(file);




        }



       


    }
}


