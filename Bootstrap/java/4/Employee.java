class Employee extends Person {
	private String office;
	private int salary;
	private String dateHired;

	public Employee(String name, String address, String phone, String email, String office, int salary, String dateHired) {
		super(name, address, phone, email);
		this.office = office;
		this.salary = salary;
		this.dateHired = dateHired;
	}

	@Override
	public String toString() {
		return "Class name is Employee and Employee's name is " + name;
	}
}