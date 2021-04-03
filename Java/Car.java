package Java;

class Car {

    Integer id;
    String license;
    String driver;
    Integer passenger;

    public void printDataCar() {
        System.out.println("Driver: " + driver + "\n" +
                           "License: " + license + "\n" +
                           "Passengers: " + passenger + "\n");
    }
    
}
