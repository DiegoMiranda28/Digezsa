const config = {
    server: 'LAPTOP-193LCMSG',
    database: 'pruebaDigezsa',
    user: 'DiegoMirand',
    password: 'Diego2812++', 
    options: { 
      trustedConnection: true,
      enableArithAbort: true,
      encrypt: false  
    },
    port: 1433, 
    dialect: "mssql",
}

module.exports = config;

