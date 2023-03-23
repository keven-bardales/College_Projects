using System;
using System.Collections.Generic;
using System.Text;

namespace Examen2Progra2.Models
{
    [Serializable]
    public class AlumnoDiasDeSemana : Alumno
    {
        double[,] notas = new double[5, 4];

        public void SetNotas(double[,] nuevasNotas)
        {
            notas = nuevasNotas;
        }

        public double[,] GetNotas()
        {
            return notas;
        }



        public override void calcPromedio()
        {
            double suma = 0;
            int contador = 0;

            for (int i = 0; i < notas.GetLength(0); i++)
            {
                int notasEnFila = 0; 

                for (int j = 0; j < notas.GetLength(1); j++)
                {
                    if (notas[i, j] != null) 
                    {
                        suma += notas[i, j];
                        notasEnFila++;
                    }
                }

                if (notasEnFila > 0) 
                {
                    contador += notasEnFila;
                }
            }

            base.promedio = suma / contador;
        }





        public AlumnoDiasDeSemana()
        {
            tipoAlumno = 1;
        }






    }
}
