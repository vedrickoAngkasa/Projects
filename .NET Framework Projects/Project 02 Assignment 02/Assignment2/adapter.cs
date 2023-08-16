using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace Assignment2
{
    public abstract class adapter
    {
        public static String name;
        public static String lat;
        public static String lng;
        public static String typeSupport;
        public static String supportLevel;
        public static String image;

        public abstract void setName(String Name);
        public abstract String getName();
        public abstract void setLat(String Lat);
        public abstract String getLat();

    
        public abstract void setLng(String Lng);
        public abstract String getLng();

        public abstract void setTypeSupport(String typeSupport);
        public abstract String getTypeSupport();

        public abstract void setSupportLevel(String supportLevel);
        public abstract String getSupportLevel();

        public abstract void setImages(String Image);
        public abstract String getImages();

        public abstract void writeXML(String Name, String Lat, String Lng, String typeSupport, String supportLevel, String Image);

  

    }
}