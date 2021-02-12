#define MyAppName "Matias' Portfolio Setup"
#define MyAppVersion "0.1.0"
#define MyAppPublisher "Matias La Mota"
#define MyAppURL "https://sites.google.com/view/dgrafix/"
#define MyAppVerName "Gray"

[Setup]
AppId={{3AFB759C-579B-4114-A803-66D89A14D32E}
AppName={#MyAppName}
AppVersion={#MyAppVersion}
AppVerName={#MyAppVerName}
AppPublisher={#MyAppPublisher}
AppPublisherURL={#MyAppURL}
AppSupportURL={#MyAppURL}
AppUpdatesURL={#MyAppURL}
DefaultDirName=C:\Program Files (x86)\Matias Portfolio
DefaultGroupName=My Program
PrivilegesRequired=lowest
OutputDir=C:\Users\mario\Documents\Elementos de la escuela\Programaci�n\VS Code\website-portfolio\Output
OutputBaseFilename=matiasportfoliosetup_v0.1.0
Compression=lzma
SolidCompression=yes
WizardStyle=modern
SetupIconFile=C:\Users\mario\Documents\Elementos de la escuela\Programación\VS Code\website-portfolio\assets\img\brand\portfolio-logo.PNG
AfterInstall:C:\Users\mario\Documents\Elementos de la escuela\Programaci�n\VS Code\website-portfolio\LICENSE

[Languages]
Name: "spanish"; MessagesFile: "compiler:Languages\Spanish.isl"

[Files]
Source: "C:\Users\mario\Documents\Elementos de la escuela\Programaci�n\VS Code\website-portfolio\*"; DestDir: "{app}"; Flags: ignoreversion recursesubdirs createallsubdirs

