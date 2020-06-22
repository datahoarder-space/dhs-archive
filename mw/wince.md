Windows Embedded Compact, formerly Windows Embedded CE and Windows CE, is an operating system subfamily developed by Microsoft as part of its Windows Embedded family of products.*

Unlike Windows Embedded Standard, which is based on Windows NT, Windows Embedded Compact uses a different hybrid kernel. Microsoft licenses Windows CE to original equipment manufacturers (OEMs), who can modify and create their own user interfaces and experiences, with Windows CE providing the technical foundation to do so.

The current version of Windows Embedded Compact supports x86 and ARM processors with board support package (BSP) directly. The MIPS and SHx architectures had support prior to version 7.0.

 Features 
Windows CE is optimized for devices that have minimal memory; a Windows CE kernel may run with one megabyte of memory. Devices are often configured without disk storage, and may be configured as a "closed" system that does not allow for end-user extension (for instance, it can be burned into ROM). Windows CE conforms to the definition of a real-time operating system, with a deterministic interrupt latency. From Version 3 and onward, the system supports 256 priority levels and uses priority inheritance for dealing with priority inversion. The fundamental unit of execution is the thread. This helps to simplify the interface and improve execution time.

The first version – known during development under the code name "Pegasus" – featured a Windows-like GUI and a number of Microsoft's popular apps, all trimmed down for smaller storage, memory, and speed of the palmtops of the day. Since then, Windows CE has evolved into a component-based, embedded, real-time operating system. It is no longer targeted solely at hand-held computers. Many platforms have been based on the core Windows CE operating system, including Microsoft's AutoPC, Pocket PC 2000, Pocket PC 2002, Windows Mobile 2003, Windows Mobile 2003 SE, Windows Mobile 5, Windows Mobile 6, Smartphone 2002, Smartphone 2003, Portable Media Center, Zune, Windows Phone and many industrial devices and embedded systems. Windows CE even powered select games for the Dreamcast, was the operating system of the Gizmondo handheld, and can partially run on modified Xbox game consoles.

A distinctive feature of Windows CE compared to other Microsoft operating systems is that large parts of it are offered in source code form. First, source code was offered to several vendors, so they could adjust it to their hardware. Then products like Platform Builder (an integrated environment for Windows CE OS image creation and integration, or customized operating system designs based on CE) offered several components in source code form to the general public. However, a number of core components that do not need adaptation to specific hardware environments (other than the CPU family) are still distributed in binary only form.

 History 
Windows Embedded Compact was formerly known as Windows CE. According to Microsoft, "CE" is not an explicit acronym for anything, although it implies a number of notions that Windows developers had in mind, such as "compact", "connectable", "compatible", "companion" and "efficient". The name changed once in 2006, with the release of Windows Embedded CE 6.0, and again in 2011, with the release of Windows Embedded Compact 7.

Windows CE was originally announced by Microsoft at the COMDEX expo in 1996 and was demonstrated on stage by Bill Gates and John McGill. Microsoft had been testing Pegasus in early 1995 and released a strict reference platform to several hardware partners. The devices had to have the following minimum hardware specifications:
 SH3, MIPS 3000 or MIPS 4000 CPU
 Minimum of 4 MB of ROM
 Minimum of 2 MB of RAM with a back up power source, such as a CR2032 coin cell battery
 Powered by two AA batteries
 Weigh less than 1lbs
 A physical QWERTY keyboard including Ctrl, Alt and Shift keys
 An LCD display of 480×240 pixels with four shades of gray and two bits per pixel with touchscreen that could be operated by either stylus or finger nail
 An Infrared transceiver
 Serial port
 PC Card slot
 Built in speaker
Devices of the time mainly had 480×240 pixel displays with the exception of the Hewlett-Packard 'Palmtop PC' which had a 640×240 display. Each window took over the full display. Navigation was done by tapping or double tapping on an item. A contextual menu was also available by the user pressing the ALT key and tapping on the screen. Windows CE 1.0 did not include a cascading Start menu unlike Windows 95 and Windows NT 4.0 did. Microsoft released the Windows CE 1.0 Power Toys that included a cascading menu icon that appeared in the system tray. Also bundled were several other utilities, most notable were a sound applet for the system tray, enabling the user to quickly mute or unmute their device or adjust the volume and a 'pocket' version of Paint.

The release of Windows CE 2.0 was well received. Microsoft learned its lessons from consumer feedback of Windows CE 1.0 and made many improvements to the operating system. The Start menu was a cascading menu, identical to those found on Windows 95 and Windows NT 4.0. Color screens were also supported and manufacturers raced to release the first color H/PC. The first to market however, was Hewlett Packard with the HP 620LX. Windows CE 2.0 also supported a broader range of CPU architectures. Programs could be also installed directly in the OS by double clicking on CAB files. Due to the nature of the ROMs that contained the operating system, users were not able to flash their devices with the newer operating system. Instead manufacturers released upgrade ROMs that users had to physically install in their devices, after removing the previous version. This would usually wipe the data on the device and present the user with the setup wizard upon first boot.

 Development tools 

 Visual Studio 
Microsoft Visual Studio 2012, 2013, and 2015 support apps and Platform Builder development for Windows Embedded Compact 2013.

Microsoft Visual Studio 2008 and earlier support projects for older releases of Windows CE/Windows Mobile, producing executable programs and platform images either as an emulator or attached by cable to an actual mobile device. A mobile device is not necessary to develop a CE program. The .NET Compact Framework supports a subset of the .NET Framework with projects in C#, and Visual Basic .NET, but not Managed C++. "Managed" apps employing the .NET Compact Framework also require devices with significantly larger memories (8 MB or more) while unmanaged apps can still run successfully on smaller devices. In Visual Studio 2010, the Windows Phone Developer Tools are used as an extension, allowing Windows Phone 7 apps to be designed and tested within Visual Studio.

 Free Pascal and Lazarus 
Free Pascal introduced the Windows CE port in Version 2.2.0, targeting ARM and x86 architectures. Later, the Windows CE header files were translated for use with Lazarus, a rapid application development (RAD) software package based on Free Pascal. Windows CE apps are designed and coded in the Lazarus integrated development environment (IDE) and compiled with an appropriate cross compiler.

 Platform Builder 
This programming tool is used for building the platform (BSP + Kernel), device drivers (shared source or custom made) and also the apps. This is a one step environment to get the system up and running. One can also use Platform Builder to export an SDK (software development kit) for the target microprocessor (SuperH, x86, MIPS, ARM etc.) to be used with another associated tool set named below.

 Others 
The Embedded Visual C++ (eVC) – a tool for development of embedded apps for Windows CE. It can be used standalone using the SDK exported from Platform Builder or using the Platform Builder's Platform Manager connectivity setup.

CodeGear Delphi Prism – runs in Visual Studio, also supports the .NET Compact Framework and thus can be used to develop mobile apps. It employs the Oxygene compiler created by RemObjects Software, which targets .NET, the .NET Compact Framework, and Mono. Its command-line compiler is available free of charge.

Basic4ppc – a programming language similar to Visual Basic – targets the .NET Compact Framework and supports Windows CE and Windows Mobile devices.

GLBasic – a very easy to learn and use BASIC dialect that compiles for many platforms, including Windows CE and Windows Mobile. It can be extended by writing inline C/C++ code.

LabVIEW – a graphical programming language, supporting many platforms, including Windows CE.

AutoHotkey – a port of the open source macro-creation and automation software utility available for Windows CE. It allows the construction of macros and simple GUI apps developed by systems analyst Jonathan Maxian Timkang.

 Relationship to Windows Mobile, Pocket PC, and SmartPhone 
Often Windows CE, Windows Mobile, and Pocket PC are used interchangeably, in part due to their common origin. This practice is not entirely accurate. Windows CE is a modular/componentized operating system that serves as the foundation of several classes of devices. Some of these modules provide subsets of other components' features (e.g. varying levels of windowing support; DCOM vs COM), others which are separate (bitmap or TrueType font support), and others which add additional features to another component. One can buy a kit (the Platform Builder) which contains all these components and the tools with which to develop a custom platform. Apps such as Excel Mobile (formerly Pocket Excel) are not part of this kit. The older Handheld PC version of Pocket Word and several other older apps are included as samples, however.

Windows Mobile is best described as a subset of platforms based on a Windows CE underpinning. Currently, Pocket PC (now called Windows Mobile Classic), SmartPhone (Windows Mobile Standard), and Pocket PC Phone Edition (Windows Mobile Professional) are the three main platforms under the Windows Mobile umbrella. Each platform uses different components of Windows CE, plus supplemental features and apps suited for their respective devices.

Pocket PC and Windows Mobile are Microsoft-defined custom platforms for general PDA use, consisting of a Microsoft-defined set of minimum profiles (Professional Edition, Premium Edition) of software and hardware that is supported. The rules for manufacturing a Pocket PC device are stricter than those for producing a custom Windows CE-based platform. The defining characteristics of the Pocket PC are the touchscreen as the primary human interface device and its extremely portable size.

CE v3.0 is the basis for Pocket PC 2002. A successor to CE v3.0 is CE.net. "PocketPC [is] a separate layer of code on top of the core Windows CE OS... Pocket PC is based on Windows CE, but it's a different offering." And licensees of Pocket PC are forbidden to modify the WinCE part.

The SmartPhone platform is a feature-rich OS and interface for cellular phone handsets. SmartPhone offers productivity features to business users, such as email, and multimedia abilities for consumers. The SmartPhone interface relies heavily on joystick navigation and PhonePad input. Devices running SmartPhone do not include a touchscreen interface. SmartPhone devices generally resemble other cellular handset form factors, whereas most Phone Edition devices use a PDA form factor with a larger display.

 Releases 

 1.0 
Released November 16, 1996. Codename "Pegasus" and "Alder".
 Devices named "handheld PC" (H/PC)
 4 MB ROM minimum
 2 MB RAM minimum
1.01 version (1.0a) – added Japanese language support.
 Unsupported as of December 31, 2001.

 2.0 
Released September 29, 1997. Codename "Birch".
 Devices named "Palm-sized PC"
 Real-time deterministic task scheduling
 Architectures: ARM, MIPS, PowerPC, StrongARM, SuperH and x86
 32-bit color screens
 SSL 2.0 and SSL 3.0
 Unsupported as of September 30, 2002 for Windows CE 2.11 and September 30, 2005 for Windows CE 2.12.
2.11 version (Palm-Size PC 1.1) – changed screen resolution to QVGA, added handwriting recognition. 2.11 version (Palm-Size PC 1.2) – based on Windows CE H/PC 2.11 kernel, removed Pocket Office.

HandeldPC 2.11 version (HandheldPC Professional) – added small versions of Microsoft Access, improved MS Office documents formats support.

 3.0 
Released June 15, 2000. Codename "Cedar" and "Galileo".
 Major recode that made CE hard real time down to the microsecond level
 Base for the Pocket PC 2000, Handheld PC 2000, Pocket PC 2002 and Smartphone 2002
 Priority levels were increased from 8 to 256
 Object store was increased from 65,536 to 4.19 million allowed objects
 Restricted access to critical APIs or restricting write access to parts of the registry
 Unsupported as of October 9, 2007.

 4.x 
Released January 7, 2002. Codename "Talisker/Jameson/McKendric".
 Integrated with .NET Compact Framework
 Driver structure changed greatly, new features added
 Base for "Pocket PC 2003"
 Flash memory and Bluetooth support
 HID devices and standardized keyboards support
 TLS (SSL 3.1), IPsec L2TP VPN, or Kerberos
 Pocket Office was reduced to Wordpad
 Separation to two editions – Core (only shell) and Professional (with Microsoft Accessories)
 In addition to the older PocketIE browser, Internet Explorer Mobile was available with near 100% page compatibility to its IE 5.5 desktop cousin.
 With Windows CE.net 4.2, a new shell was provided with Internet Explorer integration
 Unsupported as of July 10, 2012 for Windows CE 4.0 and January 8, 2013 for Windows CE 4.1 and July 9, 2013 for Windows CE 4.2.

 5.x 
Released in August 2004. Adds many new features. Codename "Macallan"
 Added automatic reporting for manufacturers
 Direct3D Mobile, a COM-based version of Windows XP's DirectX multimedia API
 DirectDraw for 2D graphics and DirectShow for camera and video digitisation support
 Remote Desktop Protocol (RDP) support
 In this version Wordpad has been eliminated too
 The "Pro" version contains the Internet Explorer browser and Windows Media Player 9
 Support ended on October 14, 2014.

 6.0 
Released in September 2006. Codename "Yamazaki".
 Process address space is increased from 32 MB to 2 GB
 Number of processes has been increased from 32 to 32,768
 User mode and kernel mode device drivers are possible
 512 MB physically managed memory
 Device.exe, filesys.exe, GWES.exe have been moved to Kernel mode
 Cellcore
 SetKMode and set process permissions no longer possible
 Support ended on April 10, 2018.
 System call performance improved

 7.0 
Released in March 2011.
 Multi-core CPU support (SMP)
 Wi-Fi Positioning System
 Bluetooth 3.0 + HS support
 DLNA (Digital Living Network Alliance)
 DRM technology
 Media Transfer Protocol
 Windows Phone 7 IE with Flash 10.1 support
 NDIS 6.1 support
 UX C++ XAML API using technologies like Windows Presentation Foundation and Silverlight for attractive and functional user interfaces
 Modernized graphics based on OpenGL ES 2.0
 Advanced touch and gesture input
 Kernel support for 3 GB physical RAM and supports ARMv7 assembly (has support for "x86, SH (automotive only) and ARM.")
 Supported until April 13, 2021.

 8.0 (2013) 
 Released in June 2013
 DHCPv6 client with stateful/stateless address configuration.
 L2TP/IPsec over IPv6 for VPN connectivity.
 Snapshot boot.
 Improved XAML data binding and Expression Blend support.
 OOM Model improvements from 7.
 Supported until October 10, 2023.
 HTML help viewer added.
