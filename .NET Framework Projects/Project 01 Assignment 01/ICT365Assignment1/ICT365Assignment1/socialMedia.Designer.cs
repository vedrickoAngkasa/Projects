namespace ICT365Assignment1
{
    partial class socialMedia
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
            this.addEventMsg = new System.Windows.Forms.Label();
            this.eventIDTxt = new System.Windows.Forms.Label();
            this.eventTypetxt = new System.Windows.Forms.Label();
            this.eventType = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.userMsgInput = new System.Windows.Forms.RichTextBox();
            this.locationAxisTxt = new System.Windows.Forms.Label();
            this.locationAxis = new System.Windows.Forms.Label();
            this.label8 = new System.Windows.Forms.Label();
            this.cancelBtnAdd = new System.Windows.Forms.Button();
            this.addEventBtn = new System.Windows.Forms.Button();
            this.datePicker = new System.Windows.Forms.DateTimePicker();
            this.userInputSocialMedia = new System.Windows.Forms.TextBox();
            this.SuspendLayout();
            // 
            // addEventMsg
            // 
            this.addEventMsg.AutoSize = true;
            this.addEventMsg.Font = new System.Drawing.Font("Segoe UI Black", 9F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point);
            this.addEventMsg.Location = new System.Drawing.Point(30, 26);
            this.addEventMsg.Name = "addEventMsg";
            this.addEventMsg.Size = new System.Drawing.Size(146, 20);
            this.addEventMsg.TabIndex = 0;
            this.addEventMsg.Text = "Enter Event Details";
            // 
            // eventIDTxt
            // 
            this.eventIDTxt.AutoSize = true;
            this.eventIDTxt.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.eventIDTxt.Location = new System.Drawing.Point(30, 76);
            this.eventIDTxt.Name = "eventIDTxt";
            this.eventIDTxt.Size = new System.Drawing.Size(72, 20);
            this.eventIDTxt.TabIndex = 1;
            this.eventIDTxt.Text = "Event ID:";
            // 
            // eventTypetxt
            // 
            this.eventTypetxt.AutoSize = true;
            this.eventTypetxt.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.eventTypetxt.Location = new System.Drawing.Point(30, 116);
            this.eventTypetxt.Name = "eventTypetxt";
            this.eventTypetxt.Size = new System.Drawing.Size(89, 20);
            this.eventTypetxt.TabIndex = 3;
            this.eventTypetxt.Text = "Event Type:";
            // 
            // eventType
            // 
            this.eventType.AutoSize = true;
            this.eventType.Location = new System.Drawing.Point(154, 116);
            this.eventType.Name = "eventType";
            this.eventType.Size = new System.Drawing.Size(0, 20);
            this.eventType.TabIndex = 4;
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.label5.Location = new System.Drawing.Point(30, 158);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(112, 20);
            this.label5.TabIndex = 5;
            this.label5.Text = "Message Text: ";
            // 
            // userMsgInput
            // 
            this.userMsgInput.Location = new System.Drawing.Point(154, 155);
            this.userMsgInput.Name = "userMsgInput";
            this.userMsgInput.Size = new System.Drawing.Size(227, 120);
            this.userMsgInput.TabIndex = 6;
            this.userMsgInput.Text = "";
            // 
            // locationAxisTxt
            // 
            this.locationAxisTxt.AutoSize = true;
            this.locationAxisTxt.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.locationAxisTxt.Location = new System.Drawing.Point(30, 309);
            this.locationAxisTxt.Name = "locationAxisTxt";
            this.locationAxisTxt.Size = new System.Drawing.Size(111, 20);
            this.locationAxisTxt.TabIndex = 7;
            this.locationAxisTxt.Text = "Location Axis: ";
            // 
            // locationAxis
            // 
            this.locationAxis.AutoSize = true;
            this.locationAxis.Location = new System.Drawing.Point(154, 309);
            this.locationAxis.Name = "locationAxis";
            this.locationAxis.Size = new System.Drawing.Size(0, 20);
            this.locationAxis.TabIndex = 8;
            // 
            // label8
            // 
            this.label8.AutoSize = true;
            this.label8.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.label8.Location = new System.Drawing.Point(30, 354);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(46, 20);
            this.label8.TabIndex = 9;
            this.label8.Text = "Date:";
            // 
            // cancelBtnAdd
            // 
            this.cancelBtnAdd.Location = new System.Drawing.Point(30, 424);
            this.cancelBtnAdd.Name = "cancelBtnAdd";
            this.cancelBtnAdd.Size = new System.Drawing.Size(94, 29);
            this.cancelBtnAdd.TabIndex = 11;
            this.cancelBtnAdd.Text = "Cancel";
            this.cancelBtnAdd.UseVisualStyleBackColor = true;
            this.cancelBtnAdd.Click += new System.EventHandler(this.cancelBtnAdd_Click);
            // 
            // addEventBtn
            // 
            this.addEventBtn.Location = new System.Drawing.Point(154, 424);
            this.addEventBtn.Name = "addEventBtn";
            this.addEventBtn.Size = new System.Drawing.Size(94, 29);
            this.addEventBtn.TabIndex = 12;
            this.addEventBtn.Text = "Add";
            this.addEventBtn.UseVisualStyleBackColor = true;
            this.addEventBtn.Click += new System.EventHandler(this.addEventBtn_Click);
            // 
            // datePicker
            // 
            this.datePicker.Location = new System.Drawing.Point(154, 354);
            this.datePicker.Name = "datePicker";
            this.datePicker.Size = new System.Drawing.Size(250, 27);
            this.datePicker.TabIndex = 13;
            // 
            // userInputSocialMedia
            // 
            this.userInputSocialMedia.Location = new System.Drawing.Point(154, 76);
            this.userInputSocialMedia.Name = "userInputSocialMedia";
            this.userInputSocialMedia.Size = new System.Drawing.Size(131, 27);
            this.userInputSocialMedia.TabIndex = 14;
            // 
            // socialMedia
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(420, 514);
            this.Controls.Add(this.userInputSocialMedia);
            this.Controls.Add(this.datePicker);
            this.Controls.Add(this.addEventBtn);
            this.Controls.Add(this.cancelBtnAdd);
            this.Controls.Add(this.label8);
            this.Controls.Add(this.locationAxis);
            this.Controls.Add(this.locationAxisTxt);
            this.Controls.Add(this.userMsgInput);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.eventType);
            this.Controls.Add(this.eventTypetxt);
            this.Controls.Add(this.eventIDTxt);
            this.Controls.Add(this.addEventMsg);
            this.Name = "socialMedia";
            this.Text = "Menu";
            this.Load += new System.EventHandler(this.socialMedia_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private Label addEventMsg;
        private Label eventIDTxt;
        private Label eventTypetxt;
        private Label eventType;
        private Label label5;
        private RichTextBox userMsgInput;
        private Label locationAxisTxt;
        private Label locationAxis;
        private Label label8;
        private Button cancelBtnAdd;
        private Button addEventBtn;
        private DateTimePicker datePicker;
        private TextBox userInputSocialMedia;
    }
}