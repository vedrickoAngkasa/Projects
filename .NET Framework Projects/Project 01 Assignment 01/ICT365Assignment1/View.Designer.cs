namespace ICT365Assignment1
{
    partial class View
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
            this.viewBtn = new System.Windows.Forms.Button();
            this.label8 = new System.Windows.Forms.Label();
            this.locationViewAxis = new System.Windows.Forms.Label();
            this.locationAxisTxt = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.eventViewType = new System.Windows.Forms.Label();
            this.eventTypetxt = new System.Windows.Forms.Label();
            this.eventViewID = new System.Windows.Forms.Label();
            this.eventIDTxt = new System.Windows.Forms.Label();
            this.viewEventMsgTxt = new System.Windows.Forms.Label();
            this.dateEventView = new System.Windows.Forms.Label();
            this.msgView = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // viewBtn
            // 
            this.viewBtn.Location = new System.Drawing.Point(133, 353);
            this.viewBtn.Name = "viewBtn";
            this.viewBtn.Size = new System.Drawing.Size(94, 29);
            this.viewBtn.TabIndex = 25;
            this.viewBtn.Text = "Ok";
            this.viewBtn.UseVisualStyleBackColor = true;
            this.viewBtn.Click += new System.EventHandler(this.viewBtn_Click);
            // 
            // label8
            // 
            this.label8.AutoSize = true;
            this.label8.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.label8.Location = new System.Drawing.Point(16, 295);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(46, 20);
            this.label8.TabIndex = 23;
            this.label8.Text = "Date:";
            // 
            // locationViewAxis
            // 
            this.locationViewAxis.AutoSize = true;
            this.locationViewAxis.Location = new System.Drawing.Point(133, 241);
            this.locationViewAxis.Name = "locationViewAxis";
            this.locationViewAxis.Size = new System.Drawing.Size(0, 20);
            this.locationViewAxis.TabIndex = 22;
            // 
            // locationAxisTxt
            // 
            this.locationAxisTxt.AutoSize = true;
            this.locationAxisTxt.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.locationAxisTxt.Location = new System.Drawing.Point(16, 241);
            this.locationAxisTxt.Name = "locationAxisTxt";
            this.locationAxisTxt.Size = new System.Drawing.Size(111, 20);
            this.locationAxisTxt.TabIndex = 21;
            this.locationAxisTxt.Text = "Location Axis: ";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.label5.Location = new System.Drawing.Point(16, 158);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(112, 20);
            this.label5.TabIndex = 19;
            this.label5.Text = "Message Text: ";
            // 
            // eventViewType
            // 
            this.eventViewType.AutoSize = true;
            this.eventViewType.Location = new System.Drawing.Point(140, 116);
            this.eventViewType.Name = "eventViewType";
            this.eventViewType.Size = new System.Drawing.Size(0, 20);
            this.eventViewType.TabIndex = 18;
            // 
            // eventTypetxt
            // 
            this.eventTypetxt.AutoSize = true;
            this.eventTypetxt.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.eventTypetxt.Location = new System.Drawing.Point(16, 116);
            this.eventTypetxt.Name = "eventTypetxt";
            this.eventTypetxt.Size = new System.Drawing.Size(89, 20);
            this.eventTypetxt.TabIndex = 17;
            this.eventTypetxt.Text = "Event Type:";
            // 
            // eventViewID
            // 
            this.eventViewID.AutoSize = true;
            this.eventViewID.Location = new System.Drawing.Point(140, 76);
            this.eventViewID.Name = "eventViewID";
            this.eventViewID.Size = new System.Drawing.Size(0, 20);
            this.eventViewID.TabIndex = 16;
            // 
            // eventIDTxt
            // 
            this.eventIDTxt.AutoSize = true;
            this.eventIDTxt.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.eventIDTxt.Location = new System.Drawing.Point(16, 76);
            this.eventIDTxt.Name = "eventIDTxt";
            this.eventIDTxt.Size = new System.Drawing.Size(72, 20);
            this.eventIDTxt.TabIndex = 15;
            this.eventIDTxt.Text = "Event ID:";
            // 
            // viewEventMsgTxt
            // 
            this.viewEventMsgTxt.AutoSize = true;
            this.viewEventMsgTxt.Font = new System.Drawing.Font("Segoe UI Black", 9F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point);
            this.viewEventMsgTxt.Location = new System.Drawing.Point(16, 26);
            this.viewEventMsgTxt.Name = "viewEventMsgTxt";
            this.viewEventMsgTxt.Size = new System.Drawing.Size(105, 20);
            this.viewEventMsgTxt.TabIndex = 14;
            this.viewEventMsgTxt.Text = "Event Details";
            // 
            // dateEventView
            // 
            this.dateEventView.AutoSize = true;
            this.dateEventView.Location = new System.Drawing.Point(133, 295);
            this.dateEventView.Name = "dateEventView";
            this.dateEventView.Size = new System.Drawing.Size(0, 20);
            this.dateEventView.TabIndex = 26;
            // 
            // msgView
            // 
            this.msgView.AutoSize = true;
            this.msgView.Location = new System.Drawing.Point(140, 158);
            this.msgView.Name = "msgView";
            this.msgView.Size = new System.Drawing.Size(0, 20);
            this.msgView.TabIndex = 27;
            // 
            // View
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(407, 478);
            this.Controls.Add(this.msgView);
            this.Controls.Add(this.dateEventView);
            this.Controls.Add(this.viewBtn);
            this.Controls.Add(this.label8);
            this.Controls.Add(this.locationViewAxis);
            this.Controls.Add(this.locationAxisTxt);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.eventViewType);
            this.Controls.Add(this.eventTypetxt);
            this.Controls.Add(this.eventViewID);
            this.Controls.Add(this.eventIDTxt);
            this.Controls.Add(this.viewEventMsgTxt);
            this.Name = "View";
            this.Text = "View";
            this.Load += new System.EventHandler(this.View_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private Button viewBtn;
        private Label label8;
        private Label locationViewAxis;
        private Label locationAxisTxt;
        private Label label5;
        private Label eventViewType;
        private Label eventTypetxt;
        private Label eventViewID;
        private Label eventIDTxt;
        private Label viewEventMsgTxt;
        private Label dateEventView;
        private Label msgView;
    }
}