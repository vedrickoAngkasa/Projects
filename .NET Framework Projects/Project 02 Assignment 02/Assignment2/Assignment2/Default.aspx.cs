using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using Tweetinvi;

namespace Assignment2
{
    public partial class _Default : Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            String lat = " ";
            String lng = " ";
            String name = " ";
            String typeSupport = " ";
            String supportLevel = " ";
            String images = " ";

            name = String.Format("{0}", Request.Form["username"]);
            lat = String.Format("{0}", Request.Form["lat"]);
            lng = String.Format("{0}", Request.Form["long"]);
            typeSupport = String.Format("{0}", Request.Form["typeSupport"]);
            supportLevel = String.Format("{0}", Request.Form["supportLevel"]);
            images = fileIMG.FileName;

            adapter adapterFunction = new webFunction();
            adapterFunction.setName(name);
            adapterFunction.setLat(lat);
            adapterFunction.setLng(lng);
            adapterFunction.setTypeSupport(typeSupport);
            adapterFunction.setSupportLevel(supportLevel);
            adapterFunction.setImages(images);
            adapterFunction.writeXML(adapterFunction.getName(), adapterFunction.getLat(), adapterFunction.getLng(), adapterFunction.getTypeSupport(),
            adapterFunction.getSupportLevel(), adapterFunction.getImages());

        }


        



        }
}