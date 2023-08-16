namespace ICT365Assignment1
{
    partial class typeOfEvent
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
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
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.typeMsg = new System.Windows.Forms.Label();
            this.twitter = new System.Windows.Forms.RadioButton();
            this.instagram = new System.Windows.Forms.RadioButton();
            this.facebook = new System.Windows.Forms.RadioButton();
            this.photo = new System.Windows.Forms.RadioButton();
            this.addTypeEvent = new System.Windows.Forms.Button();
            this.cancelAddEvent = new System.Windows.Forms.Button();
            this.typeOfEventLocation = new System.Windows.Forms.Label();
            this.typeAxis = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // typeMsg
            // 
            this.typeMsg.AutoSize = true;
            this.typeMsg.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.typeMsg.Location = new System.Drawing.Point(30, 22);
            this.typeMsg.Name = "typeMsg";
            this.typeMsg.Size = new System.Drawing.Size(201, 20);
            this.typeMsg.TabIndex = 0;
            this.typeMsg.Text = "Please select type of events";
            // 
            // twitter
            // 
            this.twitter.AutoSize = true;
            this.twitter.Location = new System.Drawing.Point(37, 115);
            this.twitter.Name = "twitter";
            this.twitter.Size = new System.Drawing.Size(75, 24);
            this.twitter.TabIndex = 1;
            this.twitter.TabStop = true;
            this.twitter.Text = "Twitter";
            this.twitter.UseVisualStyleBackColor = true;
            // 
            // instagram
            // 
            this.instagram.AutoSize = true;
            this.instagram.Location = new System.Drawing.Point(37, 169);
            this.instagram.Name = "instagram";
            this.instagram.Size = new System.Drawing.Size(96, 24);
            this.instagram.TabIndex = 2;
            this.instagram.TabStop = true;
            this.instagram.Text = "Instagram";
            this.instagram.UseVisualStyleBackColor = true;
            // 
            // facebook
            // 
            this.facebook.AutoSize = true;
            this.facebook.Location = new System.Drawing.Point(37, 219);
            this.facebook.Name = "facebook";
            this.facebook.Size = new System.Drawing.Size(93, 24);
            this.facebook.TabIndex = 3;
            this.facebook.TabStop = true;
            this.facebook.Text = "Facebook";
            this.facebook.UseVisualStyleBackColor = true;
            // 
            // photo
            // 
            this.photo.AutoSize = true;
            this.photo.Location = new System.Drawing.Point(37, 272);
            this.photo.Name = "photo";
            this.photo.Size = new System.Drawing.Size(75, 24);
            this.photo.TabIndex = 4;
            this.photo.TabStop = true;
            this.photo.Text = "Photos";
            this.photo.UseVisualStyleBackColor = true;
            // 
            // addTypeEvent
            // 
            this.addTypeEvent.Location = new System.Drawing.Point(137, 343);
            this.addTypeEvent.Name = "addTypeEvent";
            this.addTypeEvent.Size = new System.Drawing.Size(94, 29);
            this.addTypeEvent.TabIndex = 6;
            this.addTypeEvent.Text = "Add";
            this.addTypeEvent.UseVisualStyleBackColor = true;
            this.addTypeEvent.Click += new System.EventHandler(this.addTypeEvent_Click);
            // 
            // cancelAddEvent
            // 
            this.cancelAddEvent.Location = new System.Drawing.Point(18, 343);
            this.cancelAddEvent.Name = "cancelAddEvent";
            this.cancelAddEvent.Size = new System.Drawing.Size(94, 29);
            this.cancelAddEvent.TabIndex = 7;
            this.cancelAddEvent.Text = "Cancel";
            this.cancelAddEvent.UseVisualStyleBackColor = true;
            this.cancelAddEvent.Click += new System.EventHandler(this.cancelAddEvent_Click);
            // 
            // typeOfEventLocation
            // 
            this.typeOfEventLocation.AutoSize = true;
            this.typeOfEventLocation.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.typeOfEventLocation.Location = new System.Drawing.Point(30, 63);
            this.typeOfEventLocation.Name = "typeOfEventLocation";
            this.typeOfEventLocation.Size = new System.Drawing.Size(69, 20);
            this.typeOfEventLocation.TabIndex = 8;
            this.typeOfEventLocation.Text = "Location";
            // 
            // typeAxis
            // 
            this.typeAxis.AutoSize = true;
            this.typeAxis.Location = new System.Drawing.Point(137, 63);
            this.typeAxis.Name = "typeAxis";
            this.typeAxis.Size = new System.Drawing.Size(0, 20);
            this.typeAxis.TabIndex = 9;
            // 
            // typeOfEvent
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(295, 419);
            this.Controls.Add(this.typeAxis);
            this.Controls.Add(this.typeOfEventLocation);
            this.Controls.Add(this.cancelAddEvent);
            this.Controls.Add(this.addTypeEvent);
            this.Controls.Add(this.photo);
            this.Controls.Add(this.facebook);
            this.Controls.Add(this.instagram);
            this.Controls.Add(this.twitter);
            this.Controls.Add(this.typeMsg);
            this.Name = "typeOfEvent";
            this.Text = "typeOfEvent";

            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private Label typeMsg;
        private RadioButton twitter;
        private RadioButton instagram;
        private RadioButton facebook;
        private RadioButton photo;
        private Button addTypeEvent;
        private Button cancelAddEvent;
        private Label typeOfEventLocation;
        private Label typeAxis;
    }
}