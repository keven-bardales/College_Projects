/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package gestionaeropuertaria;

import java.util.ArrayList;

/**
 *
 * @author pc
 */
public class Aerolinea {
    String nombre;
    
     private ArrayList<Vuelo> vuelos = new ArrayList<Vuelo>();

    public Aerolinea(String nombre) {
        this.nombre = nombre;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public ArrayList<Vuelo> getVuelos() {
        return vuelos;
    }

    public void setVuelos(ArrayList<Vuelo> vuelos) {
        this.vuelos = vuelos;
    }

   

    public void addVuelos(Vuelo vuelo){
        vuelos.add(vuelo);
    }
    
    public void imprimeVuelos(){
        System.out.println("Lista de vuelos de la Aerolinea " + nombre);
        for(int i = 0; i < vuelos.size(); i++){
            vuelos.get(i).mostrarDatosVuelo();
        }
    }
    
    
}
