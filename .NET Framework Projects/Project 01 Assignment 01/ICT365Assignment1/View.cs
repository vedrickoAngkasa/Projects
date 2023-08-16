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
    public partial class View : Form
    {
        public View()
        {
            InitializeComponent();
        }

   
        private void View_Load(object sender, EventArgs e)
        {

            
            eventConnector viewLoad = new mainEventForm();
            viewLoad.getNearestView();
            eventViewID.Text = viewLoad.getStringEventID();
            eventViewType.Text = viewLoad.getEventViewType();
            msgView.Text = viewLoad.getMsgView();
            locationViewAxis.Text = viewLoad.getLocation();
            dateEventView.Text = viewLoad.getDateEvent();
        }

        private void viewBtn_Click(object sender, EventArgs e)
        {
            this.Close();
        }
    }
}
