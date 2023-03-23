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
public class Vuelo {
    String identificador, ciudadOrigen, destino;
    double precioViaje;
    int maxPasajeros;
    int numPasajeros;
    
    private ArrayList<Pasajero> pasajeros = new ArrayList<Pasajero>();

    public Vuelo(String identificador, String ciudadOrigen, String destino, double precioViaje, int maxPasajeros) {
        this.numPasajeros = pasajeros.size();
        this.identificador = identificador;
        this.ciudadOrigen = ciudadOrigen;
        this.destino = destino;
        this.precioViaje = precioViaje;
        this.maxPasajeros = maxPasajeros;
        this.numPasajeros = numPasajeros;
        this.pasajeros = pasajeros;
    }
    
    

    public String getIdentificador() {
        return identificador;
    }

    public void setIdentificador(String identificador) {
        this.identificador = identificador;
    }

    public String getCiudadOrigen() {
        return ciudadOrigen;
    }

    public void setCiudadOrigen(String ciudadOrigen) {
        this.ciudadOrigen = ciudadOrigen;
    }

    public String getDestino() {
        return destino;
    }

    public void setDestino(String destino) {
        this.destino = destino;
    }

    public double getPrecioViaje() {
        return precioViaje;
    }

    public void setPrecioViaje(double precioViaje) {
        this.precioViaje = precioViaje;
    }

    public int getMaxPasajeros() {
        return maxPasajeros;
    }

    public void setMaxPasajeros(int maxPasajeros) {
        this.maxPasajeros = maxPasajeros;
    }

    public int getNumPasajeros() {
        return numPasajeros;
    }

    public void setNumPasajeros(int numPasajeros) {
        this.numPasajeros = numPasajeros;
    }

    public ArrayList<Pasajero> getPasajeros() {
        return pasajeros;
    }

    public void setPasajeros(ArrayList<Pasajero> pasajeros) {
        this.pasajeros = pasajeros;
    }

  
   

    
    
    public void addPasajero(Pasajero pasajero){
        pasajeros.add(pasajero);
    }
    
    public void mostrarDatosVuelo(){
        System.out.println("\nDatos de vuelo: "
        + "\nIdentificador: " + identificador
        + "\nCiudad de Origen: " + ciudadOrigen
        + "\nCiudad de Destino: " + destino
        + "\nPrecio: " + precioViaje);
    }
    
    
}
