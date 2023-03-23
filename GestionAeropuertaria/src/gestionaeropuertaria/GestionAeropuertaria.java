/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package gestionaeropuertaria;

import java.util.ArrayList;
import java.util.Scanner;

/**
 *
 * @author pc
 */
public class GestionAeropuertaria {

   static Scanner entrada = new Scanner(System.in);
   static Scanner entrada2 = new Scanner(System.in);
   
   
  static ArrayList<Aeropuerto> aeropuertos = new ArrayList<Aeropuerto>();
  
  static int opcion; 
  static String nombre;
   
   
   
   
   
    public static void main(String[] args) {
        
        cargarAeropuerto1();
        
        
        
        do{
               printMenuPrincipal(); 
        
        switch(opcion){
            
            case 1 ->{
                printAeropuertos();
        }
            case 2->{
                opcion2Menu();
            }
            case 3->{
                opcion3Menu();
            }
            case 4->{
                opcion4Menu();
            }
        }
                }while(opcion != 6);
        
        
        
        
    }
    
    public static void cargarAeropuerto1(){
       
        
        //Agregamos el primer aeropuerto
   Aeropuerto objAero = new Aeropuerto("Toncontin","San Pedro Sula", "Honduras",1);
   String[] listaEmpresas = new String[]{"Amazon", "Tesla","Toyota","Merck","Coca-Cola"};
   objAero.setListaEmpresas(listaEmpresas);
  
   //Creamos su primer Aerolinea
   Aerolinea objAerolinea = new Aerolinea("American Airlines");
   
   //Creamos el objeto de tipo vuelo
   Vuelo objVuelo = new Vuelo("JLKF", "San Pedro Sula", "New York", 500, 150);
   
    //Creamos los pasajeros para el vuelo
   Pasajero objPasajero = new Pasajero("Keven Bardales", "Honduras", "0501200112251");
   objVuelo.addPasajero(objPasajero);
   
   objPasajero = new Pasajero("Eduardo Bardales","Honduras","0501196902825");
  objVuelo.addPasajero(objPasajero);
   
   objPasajero = new Pasajero("Sergio Chinchilla","Honduras","0501199203541");
  objVuelo.addPasajero(objPasajero);
   
   objPasajero = new Pasajero("Edgardo Chinchilla","Honduras","050619850612");
   objVuelo.addPasajero(objPasajero);
    
     objPasajero = new Pasajero("Edgardo Chinchilla","Honduras","050619850612");
   objVuelo.addPasajero(objPasajero);
    
     objPasajero = new Pasajero("John Smith","Estados Unidos","12054563265");
   objVuelo.addPasajero(objPasajero);
    
    objPasajero = new Pasajero("Carla Johnson","Estados Unidos","1215465132");
   objVuelo.addPasajero(objPasajero);
   
   objAerolinea.addVuelos(objVuelo);
   
   
    //Creamos el SEGUNDO objeto de tipo vuelo
   objVuelo = new Vuelo("KFJA", "NEW YORK", "MASSACHUSETS", 600, 120);
   
    //Creamos los pasajeros para el vuelo
   objPasajero = new Pasajero("Anna", "Canada", "83828282");
   objVuelo.addPasajero(objPasajero);
   
   objPasajero = new Pasajero("William", "United States", "94828282");
  objVuelo.addPasajero(objPasajero);
   
   objPasajero = new Pasajero("Abigail", "Australia", "48382838");
  objVuelo.addPasajero(objPasajero);
   
   objPasajero = new Pasajero("Emily", "Germany", "48382838");
   objVuelo.addPasajero(objPasajero);
    
     objPasajero = new Pasajero("Michael", "China", "83828282");
   objVuelo.addPasajero(objPasajero);
    
     objPasajero = new Pasajero("Sarah", "Russia", "94828282");
   objVuelo.addPasajero(objPasajero);
    
    objPasajero = new Pasajero("Michael Smith","Mexico","1215465132");
    objVuelo.addPasajero(objPasajero);
    objPasajero = new Pasajero("Olivia Williams","Canada","1215465132");
    objVuelo.addPasajero(objPasajero);
    objPasajero = new Pasajero("Emma Jones","Brazil","1215465132");
    objVuelo.addPasajero(objPasajero);
   
   objAerolinea.addVuelos(objVuelo);
   
   //TERCER VUELO
   
   objVuelo = new Vuelo("AFSGH", "WASHINGOTN", "BOSTON", 300, 100);
   
    //Creamos los pasajeros para el vuelo
        objPasajero = new Pasajero("David Johnson", "France", "1215465132");
      objVuelo.addPasajero(objPasajero);

      objPasajero = new Pasajero("Emily Smith", "Japan", "1215465132");
      objVuelo.addPasajero(objPasajero);

      objPasajero = new Pasajero("William Williams", "Australia", "1215465132");
      objVuelo.addPasajero(objPasajero);

      objPasajero = new Pasajero("Sophia Johnson", "Germany", "1215465132");
    objVuelo.addPasajero(objPasajero);

    objPasajero = new Pasajero("James Smith", "China", "1215465132");
    objVuelo.addPasajero(objPasajero);

    objPasajero = new Pasajero("Olivia Williams", "Russia", "1215465132");
    objVuelo.addPasajero(objPasajero);

    objPasajero = new Pasajero("Ava Johnson", "India", "1215465132");
    objVuelo.addPasajero(objPasajero);

    objPasajero = new Pasajero("Noah Smith", "United Kingdom", "1215465132");
    objVuelo.addPasajero(objPasajero);
   
   objAerolinea.addVuelos(objVuelo);
   
   
   objAero.addAerolinea(objAerolinea);
   
   objAerolinea = new Aerolinea("Copan Airlines");
   objAero.addAerolinea(objAerolinea);
   objAerolinea = new Aerolinea("Qatar Airlines");
   objAero.addAerolinea(objAerolinea);
   
   aeropuertos.add(objAero);
   
   Aeropuerto objAero2 = new Aeropuerto("Aeropuerto 2", "Tegucigalpa", "Honduras", 2);
   aeropuertos.add(objAero2);
  
   
   
   
    
}
    
    public static void printMenuPrincipal(){
        System.out.println("\n****MENU***"
                + "\n1). Consultar Aeropuertos"
                + "\n2). Buscar Patrocinio Aeropuerto"
                + "\n3). Lista Aerolineas"
                + "\n4). Lista vuelos Aerolinea"
                + "\n5). Lista de vuelos (Identificador)"
                + "\n6). Salir"
                + "\nDigite una opcion...");
                opcion = entrada2.nextInt(); 
    }
    
    public static void printAeropuertos(){
        do{
          System.out.println("\n****Consultar Aeropuertos****"
                + "\n1). Consultar Aeropuertos Privados"
                + "\n2). Consultar Aeropuertos Publicos"
                + "\n3). Consultar todos los Aeropuertos"
                + "\n4). Regresar al Menu Principal"
                + "\nDigite una opcion...");
                 opcion = entrada2.nextInt();
          
                switch(opcion){
                    case 1->{
                        System.out.println("****Aeropuertos Privados****");
                        for(int i = 0; i < aeropuertos.size(); i++){
                            if(aeropuertos.get(i).getTipoAeropuerto() == 1){
                                System.out.println(aeropuertos.get(i).mostrarInfo());
                            }
                        }
                    }
                    case 2->{
                       for(int i = 0; i < aeropuertos.size(); i++){
                            if(aeropuertos.get(i).getTipoAeropuerto() == 2){
                                System.out.println(aeropuertos.get(i).mostrarInfo());
                            }
                        } 
                    }
                    case 3->{
                        for(int i = 0; i < aeropuertos.size(); i++){
                            System.out.println(aeropuertos.get(i).mostrarInfo());
                        }
                    }
                    default ->{
                        System.out.println("Opcion no reconocida intente de nuevo");
                    }
                }
               
                  
        }while(opcion != 4);
        
        
    }
    
    public static void opcion2Menu(){
        int i;
        
        do{
           System.out.println("\nSeleccione un Aeropuerto");
        for(i = 0; i < aeropuertos.size(); i++){
            System.out.println((i+1) + "). " + aeropuertos.get(i).getNombre());
        }
        System.out.println((i+1) + "). Regresar");
        System.out.println("Digite el numero de aeropuerto");
        opcion = entrada2.nextInt(); 
            if(opcion != (i+1) && aeropuertos.get(opcion - 1).getTipoAeropuerto() == 1){
                aeropuertos.get(opcion - 1).printListaEmpresas();
            }
            else if(opcion != (i+1) && aeropuertos.get(opcion - 1).getTipoAeropuerto() == 2){
                aeropuertos.get(opcion - 1).printSubvencionPublico();
            }
        }while(opcion != (i+1));
        
    }
    
    public static void opcion3Menu(){
       int i;
        
        do{
           System.out.println("\nSeleccione un Aeropuerto para Imprimir sus Aerolineas");
        for(i = 0; i < aeropuertos.size(); i++){
            System.out.println((i+1) + "). " + aeropuertos.get(i).getNombre());
        }
        System.out.println((i+1) + "). Regresar");
        System.out.println("Digite el numero de aeropuerto");
        opcion = entrada2.nextInt(); 
        
        if(opcion != i){
            break;
        }
            
                aeropuertos.get(opcion - 1).printAerolineas();
           
        }while(opcion != (i+1));
    }
    
    public static void opcion4Menu(){
       int i;
       int opcion2, aeroMax;
        
        do{
           System.out.println("\nSeleccione un Aeropuerto para Imprimir sus Aerolineas");
        for(i = 0; i < aeropuertos.size(); i++){
            System.out.println((i+1) + "). " + aeropuertos.get(i).getNombre());
        }
        System.out.println((i+1) + "). Regresar");
        System.out.println("Digite el numero de aeropuerto");
        opcion = entrada2.nextInt(); 
        
        if(opcion == (i+1)){
            break;
        }
        if(opcion > (i+1)){
            System.out.println("\nOpcion no valida intente de nuevo");
            break;
        }
            do{
              aeropuertos.get(opcion - 1).printAerolineas();
                System.out.println((aeropuertos.get(opcion - 1).retornaPosFinalAerolinea() + 2) + "). Salir");
               System.out.println("Seleccione una Aerolinea para mostrar su lista de vuelos"); 
               opcion2 = entrada2.nextInt();
                    if(opcion2 == (aeropuertos.get(opcion - 1).retornaPosFinalAerolinea() + 2)){
                         break;
        }
                    
                    if(opcion2 > (aeropuertos.get(opcion - 1).retornaPosFinalAerolinea() + 1) && opcion2 != (aeropuertos.get(opcion - 1).retornaPosFinalAerolinea() + 2)){
            System.out.println("\nOpcion no valida intente de nuevo");
            break;
        }
                    
               aeropuertos.get(opcion - 1).printVuelosAerolineas(opcion2 - 1);
               
         
               
            }while(opcion2 != aeropuertos.get(opcion - 1).retornaPosFinalAerolinea() + 2);
                
                
           
        }while(opcion != (i+1));
    }
    
    public static void opcion5Menu(){
        
    }
    
}
