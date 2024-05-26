print('Este es un diccionario de tipo [clave: valor], pero dentro del valor guarda otro diccionario,\n' 'es algo así: [clave: [clave: valor]]')

empleados = {
    "001": {"nombre": 'Juan', 'edad': 30, 'puesto': 'Administrador'},
    "002": {"nombre": 'Maria', 'edad': 25, 'puesto': 'Analista'},
    "003": {"nombre": 'Pedro', 'edad': 35, 'puesto': 'Desarrollador'}
}

print("\nImprimiremos datos de un determinado empleado:")
print('Información del empleado con código 002:')
print("Nombre:", empleados['002']['nombre'])
print('Edad:', empleados['002']['edad'])
print("Puesto:", empleados['002']['puesto'])

print("\nInformación de todos los empleados:\n")
for codigo, info in empleados.items():
    print('Codigo:', codigo)
    print('Nombre:', info['nombre'])
    print('Edad:', info['edad'])
    print('Puesto:', info['puesto'])
    print("-" * 20)
    print("\n")
print("Agregaremos el empleado con clave 004...")
empleados['004'] = {'nombre': 'Laura', 'edad': 28, 'puesto': 'Diseñadora'}

print("\nInformación de todos los empleados:\n")
for codigo, info in empleados.items():
    print('Codigo:', codigo)
    print('Nombre:', info['nombre'])
    print('Edad:', info['edad'])
    print('Puesto:', info['puesto'])
    print("-" * 20)
    print("\n")