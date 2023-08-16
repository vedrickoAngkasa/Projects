using GMap.NET.MapProviders;

namespace ICT365Assignment1
{
    public partial class mainForm : Form
    {
        public mainForm()
        {
            InitializeComponent();
        }

        private void map_Load(object sender, EventArgs e)
        {
           

            map.MapProvider = GMapProviders.GoogleMap;
            map.SetPositionByKeywords("Paris, France");
            map.ShowCenter = false;
            map.Position = new GMap.NET.PointLatLng(48.8589507, 2.2775175);
            map.DragButton = MouseButtons.Left;
            map.MinZoom = 2;
            map.MaxZoom = 25;
            map.Zoom = 10;
            map.DisableFocusOnMouseEnter = true;
           
        }


        protected virtual void map_MouseClick(object sender, MouseEventArgs e)
        {
            displayHiddenItems();
            eventConnector mapClick = new mainEventForm();
            mapClick.setMousePosition(e);
            mapClick.addCurrentPosition(e, map);
            
        }

        protected void displayHiddenItems() { 
            menuMsg1.Visible = true;
            menuMsg2.Visible = true;
            btnAddEvent.Visible = true;
            btnViewEvent.Visible = true;
            viewXmlFile.Visible = true;
        }

        private void btnAddEvent_Click(object sender, EventArgs e)
        {
            eventConnector btnAdd = new mainEventForm();
            btnAdd.addEventForm();
            
        }

        private void btnViewEvent_Click(object sender, EventArgs e)
        {
            eventConnector btnView = new mainEventForm();
            btnView.viewEventForm();
           



        }

        private void viewXmlFile_Click(object sender, EventArgs e)
        {
            eventConnector btnViewXml = new mainEventForm();
            btnViewXml.getXmlItems(map);
        }
    }
}