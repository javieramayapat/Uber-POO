from car import Car
from account import Account

if __name__ == "__main__":
    
    car = Car("ADR487", Account("Javier","Amaya"))
    car.passenger = 4;
    print(vars(car))
    print(vars(car.driver))
    
    car2 = Car("AMS234", Account("Andres Herrera", "ANDA876"))
    car2.passenger = 5
    print(vars(car2))
    print(vars(car2.driver))
