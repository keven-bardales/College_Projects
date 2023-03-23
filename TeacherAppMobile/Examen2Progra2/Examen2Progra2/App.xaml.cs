using Examen2Progra2.Models;
using Examen2Progra2.Views;
using Newtonsoft.Json;
using System;
using System.Collections.ObjectModel;
using System.IO;
using System.Linq;
using System.Runtime.Serialization.Formatters.Binary;
using Xamarin.Forms;
using Xamarin.Forms.Xaml;


namespace Examen2Progra2
{
    public partial class App : Application
    {
        public App()
        {
            InitializeComponent();


              



        }

        protected override void OnStart()
        {
            BinaryFormatter formatter = new BinaryFormatter();
            string ruta = Path.Combine(System.Environment.GetFolderPath(System.Environment.SpecialFolder.Personal), "maestro.json");
            FileInfo fileInfo = new FileInfo(ruta);

                if (File.Exists(ruta) && fileInfo.Length > 0)
                {
                string json = File.ReadAllText(ruta);
                AppData.maestroInicial = JsonConvert.DeserializeObject<Maestro>(json);


            }
       
            else
            {
                AppData.LoadData();
            }
           

            MainPage = new NavigationPage(new ViewMaestro());


        }

        protected override void OnSleep()
        {

         

        }

        protected override void OnResume()
        {
            
        }
    }

    }


