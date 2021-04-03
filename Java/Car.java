package Java;

class Car {

    Integer id;
    String license;
    Account driver;
    Integer passenger;

    public Car(String license, Account driver){
        this.license = license;
        this.driver =  driver;
    }

    public void printDataCar() {
        System.out.println("Driver: " + driver.name + "\n" +
                           "License: " + license + "\n" +
                           "Passengers: " + passenger + "\n");
    }
    
}
