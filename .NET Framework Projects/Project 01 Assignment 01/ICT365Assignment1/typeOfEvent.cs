using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ICT365Assignment1
{
    public partial class typeOfEvent : Form
    {

        public typeOfEvent()
        {
            InitializeComponent();
        }
        
        private void cancelAddEvent_Click(object sender, EventArgs e)
        {
            this.Close();
        }



        private void addTypeEvent_Click(object sender, EventArgs e)
        {
            eventConnector typeChecked = new mainEventForm();

            if (twitter.Checked == true)
            {
                string eventType = "Twitter";
                
               typeChecked.passedInDataType(eventType);
                typeChecked.goToSocialMediaForm();
                this.Close();
            }
            else if (instagram.Checked == true)
            {
                string eventType = "Instagram";
                typeChecked.passedInDataType(eventType);
                typeChecked.goToSocialMediaForm();
                this.Close();
            }
            else if (facebook.Checked == true)
            {
                string eventType = "Facebook";
                typeChecked.passedInDataType(eventType);
                typeChecked.goToSocialMediaForm();
                this.Close();

            } else if (photo.Checked == true) {

                string eventType = "Photo";
                typeChecked.passedInDataType(eventType);
                typeChecked.goToPhotoForm();
                this.Close();

            }
       

        }


    }
}
