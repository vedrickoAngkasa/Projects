using GMap.NET.WindowsForms;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ICT365Assignment1
{
    abstract class eventConnector : mainForm
    {
        protected static double Y;
        protected static double X;
        protected static string eventType;
        public static List<events> eventFile;
        
        public abstract double getX();
        public abstract double getY();

        public abstract string getStringEventID();
        public abstract string getEventViewType();
        public abstract string getMsgView();

        public abstract string getLocation();

        public abstract string getDateEvent();

        public abstract string getEventType();
        public abstract void setMousePosition(MouseEventArgs e);
 
        public abstract void addEventForm();
        public abstract void goToSocialMediaForm();

        public abstract void goToPhotoForm();

        public abstract void viewEventForm();
        public abstract void addCurrentPosition(MouseEventArgs e, GMapControl map);

        public abstract void passedInDataType(string dataTypeString);

        public abstract void getXmlItems(GMapControl map);

        public abstract void getNearestView();

        
    }
}
