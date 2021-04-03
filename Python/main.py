from car import Car

if __name__ == "__main__":
    car = Car()
    car.license = "ADR487"
    car.passenger = 4
    car.driver = "Javier"
    print(vars(car))
    
    car2 = Car();
    car.driver = "Majo"
    car2.license = "HTGD456"
    car2.passenger = 4
    print(vars(car2))