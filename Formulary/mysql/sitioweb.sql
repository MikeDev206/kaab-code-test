
CREATE TABLE sitioweb(
     ID  INT NOT NULL UNIQUE,
     NOMBRE VARCHAR(100) NOT NULL,
     FECHA_REGISTRO DATETIME,
     TELEFONO INT NOT NULL UNIQUE,
     CORREO_ELECTRONICO VARCHAR (50) NOT NULL,
     CONTRASEÑA VARCHAR (50) NOT NULL,
     CONFIRMAR_CONTRASEÑA VARCHAR (50) NOT NULL

)

   
    
