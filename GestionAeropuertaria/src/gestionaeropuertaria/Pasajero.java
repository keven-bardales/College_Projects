/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package gestionaeropuertaria;

/**
 *
 * @author pc
 */
public class Pasajero {
    String nombre, nacionalidad;
    String numPasaporte;

    public Pasajero(String nombre, String nacionalidad, String numPasaporte) {
        this.nombre = nombre;
        this.nacionalidad = nacionalidad;
        this.numPasaporte = numPasaporte;
    }

    
    
    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getNacionalidad() {
        return nacionalidad;
    }

    public void setNacionalidad(String nacionalidad) {
        this.nacionalidad = nacionalidad;
    }

    public String getNumPasaporte() {
        return numPasaporte;
    }

    public void setNumPasaporte(String numPasaporte) {
        this.numPasaporte = numPasaporte;
    }
    
    
}
