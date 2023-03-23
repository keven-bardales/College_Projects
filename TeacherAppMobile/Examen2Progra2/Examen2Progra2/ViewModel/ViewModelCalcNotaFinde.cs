using Examen2Progra2.Models;
using Examen2Progra2.Views;
using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Input;
using Xamarin.Forms;

namespace Examen2Progra2.ViewModel
{
    public class ViewModelCalcNotaFinde : BaseViewModel
    {



        #region VARIABLES
       private AlumnoFinde alumno = new AlumnoFinde();
    
        private double nota1;
        private double nota2;
        private double nota3;
        private double nota4;
        #endregion

        #region CONSTRUCTOR
        public ViewModelCalcNotaFinde(INavigation navigation, Alumno alumnoActual)
        {
            Navigation = navigation;

            if (alumnoActual is AlumnoFinde)
            {
                this.alumno = (AlumnoFinde)alumnoActual;
            }

            alumno.nombreAlumno = AppData.maestroInicial.materiaInicial.alumnoSeleccionado.nombreAlumno;




        }
        #endregion

        #region OBJETOS

        public double Nota1
        {
            get { return nota1; }
            set
            {
                SetValue(ref nota1, value);
            }
        }

        public double Nota2
        {
            get { return nota2; }
            set
            {
                SetValue(ref nota2, value);
            }
        }

        public double Nota3
        {
            get { return nota3; }
            set
            {
                SetValue(ref nota3, value);
            }
        }

        public double Nota4
        {
            get { return nota4; }
            set
            {
                SetValue(ref nota4, value);
            }
        }

        #endregion

        #region PROCESOS
        public async Task GuardarNotas()
        {
            alumno.GetNotas()[0] = nota1;
            alumno.GetNotas()[1] = nota2;
            alumno.GetNotas()[2] = nota3;
            alumno.GetNotas()[3] = nota4;

            alumno.calcPromedio();
            AppData.maestroInicial.materiaInicial.alumnoSeleccionado.promedio = alumno.promedio;

            AppData.maestroInicial.materiaInicial.ActualizarAlumnoMateria(alumno);

            Materia materiaGuardar = new Materia();

            materiaGuardar = AppData.maestroInicial.materiaInicial;

            AppData.maestroInicial.ActualizarMateriaMaestro(materiaGuardar);

            AppData.GuardarApp();

            DisplayAlert("", $"Notas Guardadas exitosamente", "Aceptar");

            Navigation.PopAsync();
        }
        #endregion

        #region COMANDOS
        public ICommand CalcNotaCommand => new Command(async () =>
        {
            await GuardarNotas();
        });
        #endregion

    }
}
