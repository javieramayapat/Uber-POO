package Java;

class Main {
    public static void main(String[] args) {
        // System.out.println("Hola Devs");

        Car car = new Car("AAPU1512", new Account("Jose Perez", "ADER456"));
        car.passenger = 4;
        
        car.printDataCar();

        Car car2 =  new Car( "JUYT456", new Account("Javier", "AAPJ45687"));
        car2.passenger = 5;

        car2.printDataCar();

    }
}