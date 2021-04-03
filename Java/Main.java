package Java;

class Main {
    public static void main(String[] args) {
        // System.out.println("Hola Devs");

        Car car = new Car();

        car.license = "AAPU1512";
        car.driver = "Jose Perez";
        car.passenger = 4;
        
        car.printDataCar();

        Car car2 =  new Car();
        car2.license = "JUYT456";
        car2.driver = "Javier";
        car2.passenger = 5;

        car2.printDataCar();

    }
}