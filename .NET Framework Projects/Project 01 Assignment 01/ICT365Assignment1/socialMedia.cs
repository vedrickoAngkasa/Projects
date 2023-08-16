using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Xml;
using System.Xml.Linq;

namespace ICT365Assignment1
{
  
    public partial class socialMedia : Form
    {
      
        public socialMedia()
        {
            InitializeComponent();
          
        }

        private void socialMedia_Load(object sender, EventArgs e)
        {
            eventConnector socialForm = new mainEventForm();
            eventType.Text = socialForm.getEventType();
            locationAxis.Text = "X : " + socialForm.getX() + " Y : " + socialForm.getY();

        }

        private void cancelBtnAdd_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void addEventBtn_Click(object sender, EventArgs e)
        {
       /*     string file = ;
            eventConnector socialForm = new mainEventForm();
            XDocument doc = new XDocument(
                XElement("EventId", socialForm.getEventType),
                XElement("eventType",socialForm.getEventType),
                XElement("text", ),
                XElement("eventAxisY", ),
                XElement("eventAxisX" , ),
                XElement("dateTime", )
                );

            doc.Save(file);*/
        }
    }
}
