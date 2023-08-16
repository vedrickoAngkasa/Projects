namespace ICT365Assignment1
{
    partial class mainForm
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.splitter1 = new System.Windows.Forms.Splitter();
            this.map = new GMap.NET.WindowsForms.GMapControl();
            this.introMsg1 = new System.Windows.Forms.Label();
            this.introMsg2 = new System.Windows.Forms.Label();
            this.menuMsg1 = new System.Windows.Forms.Label();
            this.menuMsg2 = new System.Windows.Forms.Label();
            this.btnAddEvent = new System.Windows.Forms.Button();
            this.btnViewEvent = new System.Windows.Forms.Button();
            this.viewXmlFile = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // splitter1
            // 
            this.splitter1.Location = new System.Drawing.Point(0, 0);
            this.splitter1.Name = "splitter1";
            this.splitter1.Size = new System.Drawing.Size(618, 450);
            this.splitter1.TabIndex = 0;
            this.splitter1.TabStop = false;
            // 
            // map
            // 
            this.map.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.map.Bearing = 0F;
            this.map.CanDragMap = true;
            this.map.EmptyTileColor = System.Drawing.Color.Navy;
            this.map.GrayScaleMode = false;
            this.map.HelperLineOption = GMap.NET.WindowsForms.HelperLineOptions.DontShow;
            this.map.LevelsKeepInMemory = 5;
            this.map.Location = new System.Drawing.Point(24, 27);
            this.map.MarkersEnabled = true;
            this.map.MaxZoom = 2;
            this.map.MinZoom = 2;
            this.map.MouseWheelZoomEnabled = true;
            this.map.MouseWheelZoomType = GMap.NET.MouseWheelZoomType.MousePositionAndCenter;
            this.map.Name = "map";
            this.map.NegativeMode = false;
            this.map.PolygonsEnabled = true;
            this.map.RetryLoadTile = 0;
            this.map.RoutesEnabled = true;
            this.map.ScaleMode = GMap.NET.WindowsForms.ScaleModes.Integer;
            this.map.SelectedAreaFillColor = System.Drawing.Color.FromArgb(((int)(((byte)(33)))), ((int)(((byte)(65)))), ((int)(((byte)(105)))), ((int)(((byte)(225)))));
            this.map.ShowTileGridLines = false;
            this.map.Size = new System.Drawing.Size(577, 401);
            this.map.TabIndex = 1;
            this.map.Zoom = 0D;
            this.map.Load += new System.EventHandler(this.map_Load);
            this.map.MouseClick += new System.Windows.Forms.MouseEventHandler(this.map_MouseClick);
            // 
            // introMsg1
            // 
            this.introMsg1.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Right)));
            this.introMsg1.AutoSize = true;
            this.introMsg1.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.introMsg1.Location = new System.Drawing.Point(651, 74);
            this.introMsg1.Name = "introMsg1";
            this.introMsg1.Size = new System.Drawing.Size(125, 20);
            this.introMsg1.TabIndex = 2;
            this.introMsg1.Text = "Click on the Map";
            // 
            // introMsg2
            // 
            this.introMsg2.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Right)));
            this.introMsg2.AutoSize = true;
            this.introMsg2.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.introMsg2.Location = new System.Drawing.Point(633, 113);
            this.introMsg2.Name = "introMsg2";
            this.introMsg2.Size = new System.Drawing.Size(164, 20);
            this.introMsg2.TabIndex = 3;
            this.introMsg2.Text = "to Add or View Events";
            // 
            // menuMsg1
            // 
            this.menuMsg1.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Right)));
            this.menuMsg1.AutoSize = true;
            this.menuMsg1.Location = new System.Drawing.Point(651, 258);
            this.menuMsg1.Name = "menuMsg1";
            this.menuMsg1.Size = new System.Drawing.Size(113, 20);
            this.menuMsg1.TabIndex = 4;
            this.menuMsg1.Text = "Please click one";
            this.menuMsg1.Visible = false;
            // 
            // menuMsg2
            // 
            this.menuMsg2.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Right)));
            this.menuMsg2.AutoSize = true;
            this.menuMsg2.Location = new System.Drawing.Point(651, 289);
            this.menuMsg2.Name = "menuMsg2";
            this.menuMsg2.Size = new System.Drawing.Size(98, 20);
            this.menuMsg2.TabIndex = 5;
            this.menuMsg2.Text = "button below";
            this.menuMsg2.Visible = false;
            // 
            // btnAddEvent
            // 
            this.btnAddEvent.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Right)));
            this.btnAddEvent.Location = new System.Drawing.Point(651, 329);
            this.btnAddEvent.Name = "btnAddEvent";
            this.btnAddEvent.Size = new System.Drawing.Size(94, 29);
            this.btnAddEvent.TabIndex = 6;
            this.btnAddEvent.Text = "Add Event";
            this.btnAddEvent.UseVisualStyleBackColor = true;
            this.btnAddEvent.Visible = false;
            this.btnAddEvent.Click += new System.EventHandler(this.btnAddEvent_Click);
            // 
            // btnViewEvent
            // 
            this.btnViewEvent.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Right)));
            this.btnViewEvent.Location = new System.Drawing.Point(651, 373);
            this.btnViewEvent.Name = "btnViewEvent";
            this.btnViewEvent.Size = new System.Drawing.Size(137, 29);
            this.btnViewEvent.TabIndex = 7;
            this.btnViewEvent.Text = "View Closet Event";
            this.btnViewEvent.UseVisualStyleBackColor = true;
            this.btnViewEvent.Visible = false;
            this.btnViewEvent.Click += new System.EventHandler(this.btnViewEvent_Click);
            // 
            // viewXmlFile
            // 
            this.viewXmlFile.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Right)));
            this.viewXmlFile.Location = new System.Drawing.Point(651, 409);
            this.viewXmlFile.Name = "viewXmlFile";
            this.viewXmlFile.Size = new System.Drawing.Size(94, 29);
            this.viewXmlFile.TabIndex = 8;
            this.viewXmlFile.Text = "View Other Event";
            this.viewXmlFile.UseVisualStyleBackColor = true;
            this.viewXmlFile.Visible = false;
            this.viewXmlFile.Click += new System.EventHandler(this.viewXmlFile_Click);
            // 
            // mainForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.viewXmlFile);
            this.Controls.Add(this.btnViewEvent);
            this.Controls.Add(this.btnAddEvent);
            this.Controls.Add(this.menuMsg2);
            this.Controls.Add(this.menuMsg1);
            this.Controls.Add(this.introMsg2);
            this.Controls.Add(this.introMsg1);
            this.Controls.Add(this.map);
            this.Controls.Add(this.splitter1);
            this.Name = "mainForm";
            this.Text = "Form1";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private Splitter splitter1;
        private GMap.NET.WindowsForms.GMapControl map;
        private Label introMsg1;
        private Label introMsg2;
        private Label menuMsg1;
        private Label menuMsg2;
        private Button btnAddEvent;
        private Button btnViewEvent;
        private Button viewXmlFile;
    }
}