function Car(license, driver) {
    this.id;
    this.license = license;
    this.driver = driver;
    this.passenger;
}

Car.prototype.printDataCar = function () {
    console.log("Licencia: " + this.license + "\n" +
        "Nombre Conductor: " + this.driver.name + "\n" +
        "Nombre documento: " + this.driver.document);
}