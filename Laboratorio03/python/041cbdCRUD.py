import os
import time
import mysql.connector

# Conexión a la base de datos
mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="sistemas"
)
mycursor = mydb.cursor()

while True:
    print('--MENU DEL SISTEMA---\n'
          ' 1. Insertar un dato.\n'
          ' 2. Eliminar un dato.\n'
          ' 3. Buscar un dato.\n'
          ' 4. Sobreescribir un dato.\n'
          ' 5. Mostrar el contenido de la lista.\n'
          ' 6. Salir del sistema.')
    
    opcion = int(input('Elige una opción: '))
    
    if opcion == 1:  # Create (insertar)
        dni = input('Ingresa el dni a insertar: ')
        nombres = input('Ingresa el nombre: ')
        apellidopa = input('Ingresa el apellido paterno: ')
        apellidoma = input('Ingresa el apellido materno: ')
        sql = "INSERT INTO personas (dni, nombres, apellidopa, apellidoma) VALUES (%s, %s, %s, %s)"
        val = (dni, nombres, apellidopa, apellidoma,)
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "registro insertado.")
        time.sleep(2)
        os.system('cls')
    
    elif opcion == 2:  # Delete (eliminar)
        dni = input('Ingresa el dni a eliminar: ')
        sql = "DELETE FROM personas WHERE dni = %s"
        val = (dni,)
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "registro(s) eliminado(s).")
        time.sleep(2)
        os.system('cls')
    
    elif opcion == 3:  # Read (leer)
        dni = input('Ingresa el dni a buscar: ')
        sql = "SELECT * FROM personas WHERE dni = %s"
        val = (dni,)
        mycursor.execute(sql, val)
        myresult = mycursor.fetchall()
        if myresult:
            print('El dni está en la tabla.')
        else:
            print('El dni no existe en la tabla.')
        time.sleep(2)
        os.system('cls')
    
    elif opcion == 4:  # UpDate (actualizar)
        datoAnterior = input('Ingresa el dni a sobreescribir: ')
        datoNuevo = input('Ingresa el nuevo dni: ')
        sql = "UPDATE personas SET dni = %s WHERE dni = %s"
        val = (datoNuevo, datoAnterior)
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "registro(s) actualizado(s).")
        time.sleep(2)
        os.system('cls')
    
    elif opcion == 5:  # Read (leer)
        mycursor.execute("SELECT * FROM personas")
        myresult = mycursor.fetchall()
        print("Contenido de la tabla:")
        for x in myresult:
            print(x)
        time.sleep(3)
        os.system('cls')
    
    elif opcion == 6:  # Salir
        respuesta = input('Estás seguro? (s/n)')
        if respuesta.upper() == 'S':
            print('Saliendo del sistema...')
            time.sleep(2)
            os.system("cls")
            break
        time.sleep(2)
        os.system('cls')
    else:
        print('Opción no válida, intenta de nuevo...')
        time.sleep(2)
        os.system('cls')

# Cerrar la conexión
mydb.close()
