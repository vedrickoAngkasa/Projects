using GMap.NET;
using GMap.NET.MapProviders;
using GMap.NET.WindowsForms;
using GMap.NET.WindowsForms.Markers;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Xml;

namespace ICT365Assignment1
{
    class mainEventForm : eventConnector
    {
        protected static double Y;
        protected static double X;
        protected static string eventType;
        public static List<events> eventFile;
        protected static string stringEventID;
        protected static string stringEventType;
        protected static string stringMsg;
        protected static string stringLocation;
        protected static string stringDateEvent;

        public mainEventForm() {
            eventFile = new List<events>();
        }
        public override void setMousePosition(MouseEventArgs e) { 
                Y = e.Y;
                X = e.X;
        }

        public override string getEventViewType()
        {
            return stringEventType;
        }

        public override string getMsgView()
        {
            return stringMsg;
        }
        public override string getLocation() { 
            return stringLocation;
        }

        public override string getDateEvent()
        {
            return stringDateEvent;
        }


        public override string getStringEventID()
        {
            return stringEventID;
        }
        public override double getY() { 
            return Y;
        }

        public override double getX()
        {
            return X;
        }

        public override string getEventType()
        {
            return eventType;
        }

        public override void addEventForm()
        {
            var addForm = new typeOfEvent();
            addForm.Show();
        }

        public override void viewEventForm()
        {
            var viewForm = new View();
            viewForm.Show();
        }

        public override void addCurrentPosition(MouseEventArgs e, GMapControl map)
        {
            if (e.Button == MouseButtons.Left)
            {
               
                var point = map.FromLocalToLatLng(e.X, e.Y);
  
                //Load Location
                map.Position = point;

                //Adding Marker
                var markers = new GMapOverlay("markers");
                var marker = new GMarkerGoogle(point, GMarkerGoogleType.red_big_stop);


                map.Overlays.Add(markers);
                markers.Markers.Add(marker);

            }

        }

        public override void passedInDataType(string dataTypeString)
        {
            eventType = dataTypeString;
        }

        public override void goToSocialMediaForm()
        {
            var socialMediaPage = new socialMedia();
            socialMediaPage.Show();
        }

        public override void goToPhotoForm()
        {
          /*  var photoPage = new Photo();
            photoPage.Show();*/
        }

        public  override void getXmlItems(GMapControl map)
        {
            
            XmlDocument xmlDoc = new XmlDocument();
            string path = "../../../../data.xml";
            xmlDoc.Load(path);

            XmlNodeList eventID = xmlDoc.GetElementsByTagName("EventId");
            XmlNodeList eventType = xmlDoc.GetElementsByTagName("eventType");
            XmlNodeList eventText = xmlDoc.GetElementsByTagName("text");
            XmlNodeList eventAxisY = xmlDoc.GetElementsByTagName("eventAxisY");
            XmlNodeList eventAxisX = xmlDoc.GetElementsByTagName("eventAxisX");
            XmlNodeList eventDateTime = xmlDoc.GetElementsByTagName("dateTime");

            for (int i = 0; i < eventID.Count; i++)
            {

               eventFile.Add(new events {
                    eventId = eventID[i].InnerText.ToString(),
                    eventType = eventType[i].InnerText.ToString(),
                    text = eventText[i].InnerText.ToString(),
                    eventAxisY = eventAxisY[i].InnerText.ToString(),
                    eventAxisX = eventAxisX[i].InnerText.ToString(),
                    dateTime = eventDateTime[i].InnerText.ToString(),
                });

                int pointY = Int32.Parse(eventAxisY[i].InnerText.ToString());
                int pointX = Int32.Parse(eventAxisX[i].InnerText.ToString());

                var point = map.FromLocalToLatLng(pointX, pointY);
                //Load Location
                map.Position = point;

                //Adding Marker
                var markers = new GMapOverlay("markers");
                if (eventType[i].InnerText.ToString() == "Facebook")
                {
                    var marker = new GMarkerGoogle(point, GMarkerGoogleType.blue_dot);
                    markers.Markers.Add(marker);
                    map.Overlays.Add(markers);
                }
                else if (eventType[i].InnerText.ToString() == "Instagram")
                {
                    var marker = new GMarkerGoogle(point, GMarkerGoogleType.pink_pushpin);
                    markers.Markers.Add(marker);
                    map.Overlays.Add(markers);
                }
                else if (eventType[i].InnerText.ToString() == "Twitter") {
                    var marker = new GMarkerGoogle(point, GMarkerGoogleType.lightblue_dot);
                    markers.Markers.Add(marker);
                    map.Overlays.Add(markers);
                }
                else if (eventType[i].InnerText.ToString() == "Photos")
                {
                    var marker = new GMarkerGoogle(point, GMarkerGoogleType.gray_small);
                    markers.Markers.Add(marker);
                    map.Overlays.Add(markers);
                }

               

            }

            
            
        }

        public override void getNearestView()
        {

            XmlDocument xmlDoc = new XmlDocument();
            string path = "../../../../data.xml";
            xmlDoc.Load(path);

            XmlNodeList eventID = xmlDoc.GetElementsByTagName("EventId");
            XmlNodeList eventType = xmlDoc.GetElementsByTagName("eventType");
            XmlNodeList eventText = xmlDoc.GetElementsByTagName("text");
            XmlNodeList eventAxisY = xmlDoc.GetElementsByTagName("eventAxisY");
            XmlNodeList eventAxisX = xmlDoc.GetElementsByTagName("eventAxisX");
            XmlNodeList eventDateTime = xmlDoc.GetElementsByTagName("dateTime");

            for (int i = 0; i < eventID.Count; i++)
            {

                eventFile.Add(new events
                {
                    eventId = eventID[i].InnerText.ToString(),
                    eventType = eventType[i].InnerText.ToString(),
                    text = eventText[i].InnerText.ToString(),
                    eventAxisY = eventAxisY[i].InnerText.ToString(),
                    eventAxisX = eventAxisX[i].InnerText.ToString(),
                    dateTime = eventDateTime[i].InnerText.ToString(),
                });

                int pointY = Int32.Parse(eventAxisY[i].InnerText.ToString());
                int pointX = Int32.Parse(eventAxisX[i].InnerText.ToString());

                if (((getX() < pointX && getX() > (pointX - 100)) && ((getY() < pointY && getY() > (pointY - 100)))))
                {
                    stringEventID = eventFile[i].eventId;
                    stringEventType = eventFile[i].eventType;
                    stringMsg = eventFile[i].text;
                    stringLocation = "X : " + eventFile[i].eventAxisX.ToString() + " Y:  " + eventFile[i].eventAxisY.ToString();
                    stringDateEvent = eventFile[i].dateTime;
                }

            }


          

        }



        }
}
