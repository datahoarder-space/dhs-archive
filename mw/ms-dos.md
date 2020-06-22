MS-DOS is an operating system for x86-based personal computers mostly developed by Microsoft. Collectively, MS-DOS, its rebranding as IBM PC DOS, and some operating systems attempting to be compatible with MS-DOS, are sometimes referred to as "DOS" (which is also the generic acronym for disk operating system). MS-DOS was the main operating system for IBM PC compatible personal computers during the 1980s and the early 1990s, when it was gradually superseded by operating systems offering a graphical user interface (GUI), in various generations of the graphical Microsoft Windows operating system.

MS-DOS resulted from a request in 1981 by IBM for an operating system to use in its IBM PC range of personal computers. Microsoft quickly bought the rights to 86-DOS from Seattle Computer Products, and began work on modifying it to meet IBM's specification. IBM licensed and released it on August 12, 1981 as PC DOS 1.0 for use in their PCs. Although MS-DOS and PC DOS were initially developed in parallel by Microsoft and IBM, the two products diverged after twelve years, in 1993, with recognizable differences in compatibility, syntax, and capabilities.

During its lifetime, several competing products were released for the x86 platform, and MS-DOS went through eight versions, until development ceased in 2000. Initially MS-DOS was targeted at Intel 8086 processors running on computer hardware using floppy disks to store and access not only the operating system, but application software and user data as well. Progressive version releases delivered support for other mass storage media in ever greater sizes and formats, along with added feature support for newer processors and rapidly evolving computer architectures. Ultimately it was the key product in Microsoft's growth from a programming language company to a diverse software development firm, providing the company with essential revenue and marketing resources. It was also the underlying basic operating system on which early versions of Windows ran as a GUI. It is a flexible operating system, and consumes negligible installation space.

== History ==
MS-DOS was a renamed form of 86-DOS – owned by Seattle Computer Products, written by Tim Paterson. Development of 86-DOS took only six weeks, as it was basically a clone of Digital Research's CP/M (for 8080/Z80 processors), ported to run on 8086processors and with two notable differences compared to CP/M; an improved disk sector buffering logic and the introduction of FAT12 instead of the CP/M filesystem. This first version was shipped in August 1980. Microsoft, which needed an operating system for the IBM Personal Computer hired Tim Paterson in May 1981 and bought 86-DOS 1.10 for $75,000 in July of the same year. Microsoft kept the version number, but renamed it MS-DOS. They also licensed MS-DOS 1.10/1.14 to IBM, who, in August 1981, offered it as PC DOS 1.0 as one of three operating systems[13] for the IBM 5150, or the IBM PC.

Within a year Microsoft licensed MS-DOS to over 70 other companies. It was designed to be an OS that could run on any 8086-family computer. Each computer would have its own distinct hardware and its own version of MS-DOS, similar to the situation that existed for CP/M, and with MS-DOS emulating the same solution as CP/M to adapt for different hardware platforms. To this end, MS-DOS was designed with a modular structure with internal device drivers, minimally for primary disk drives and the console, integrated with the kernel and loaded by the boot loader, and installable device drivers for other devices loaded and integrated at boot time. The OEM would use a development kit provided by Microsoft to build a version of MS-DOS with their basic I/O drivers and a standard Microsoft kernel, which they would typically supply on disk to end users along with the hardware. Thus, there were many different versions of "MS-DOS" for different hardware, and there is a major distinction between an IBM-compatible (or ISA) machine and an MS-DOS [compatible] machine. Some machines, like the Tandy 2000, were MS-DOS compatible but not IBM-compatible, so they could run software written exclusively for MS-DOS without dependence on the peripheral hardware of the IBM PC architecture.

This design would have worked well for compatibility, if application programs had only used MS-DOS services to perform device I/O, and indeed the same design philosophy is embodied in Windows NT (see Hardware Abstraction Layer). However, in MS-DOS's early days, the greater speed attainable by programs through direct control of hardware was of particular importance, especially for games, which often pushed the limits of their contemporary hardware. Very soon an IBM-compatible architecture became the goal, and before long all 8086-family computers closely emulated IBM's hardware, and only a single version of MS-DOS for a fixed hardware platform was needed for the market. This version is the version of MS-DOS that is discussed here, as the dozens of other OEM versions of "MS-DOS" were only relevant to the systems they were designed for, and in any case were very similar in function and capability to some standard version for the IBM PC—often the same-numbered version, but not always, since some OEMs used their own proprietary version numbering schemes (e.g. labeling later releases of MS-DOS 1.x as 2.0 or vice versa)—with a few notable exceptions.

Microsoft omitted multi-user support from MS-DOS because Microsoft's Unix-based operating system, Xenix, was fully multi-user. The company planned to over time improve MS-DOS so it would be almost indistinguishable from single-user Xenix, or XEDOS, which would also run on the Motorola 68000, Zilog Z8000, and the LSI-11; they would be upwardly compatible with Xenix, which Byte in 1983 described as "the multi-user MS-DOS of the future".[ Microsoft advertised MS-DOS and Xenix together, listing the shared features of its "single-user OS" and "the multi-user, multi-tasking, UNIX-derived operating system", and promising easy porting between them. After the breakup of the Bell System, however, AT&T Computer Systems started selling UNIX System V. Believing that it could not compete with AT&T in the Unix market, Microsoft abandoned Xenix, and in 1987 transferred ownership of Xenix to the Santa Cruz Operation (SCO).

On March 25, 2014, Microsoft made the code to SCP MS-DOS 1.25 and a mixture of Altos MS-DOS 2.11 and TeleVideo PC DOS 2.11 available to the public under the Microsoft Research License Agreement, which makes the code source-available, but not open sourceas defined by Open Source Initiative or Free Software Foundation standards.

As an April Fools joke in 2015, Microsoft Mobile launched a Windows Phone application called MS-DOS Mobile which was presented as a new mobile operating system and worked similar to MS-DOS.

== Versions ==
Microsoft licensed or released versions of MS-DOS under different names like Lifeboat Associates "Software Bus 86" aka SB-DOS, COMPAQ-DOS, NCR-DOS or Z-DOS before it eventually enforced the MS-DOS name for all versions but the IBM one, which was originally called "IBM Personal Computer DOS", later shortened to IBM PC DOS. (Competitors released compatible DOS systems such as DR DOS and PTS-DOS that could also run DOS applications.)

The following versions of MS-DOS were released to the public:
* MS-DOS 1.x
* Version 1.10 (OEM) – possible basis for IBM's Personal Computer DOS 1.0
* Version 1.11 (OEM) – possible basis for IBM's Personal Computer DOS 1.0
* Version 1.14 (OEM) – possible basis for IBM's Personal Computer DOS 1.0
* Version 1.24 (OEM) – basis for IBM's Personal Computer DOS 1.1
* Version 1.25 (OEM) – basis for non-IBM OEM versions of MS-DOS, including SCP MS-DOS 1.25
* Compaq-DOS 1.12, a Compaq OEM version of MS-DOS (1.25 or higher)
* Zenith Z-DOS 1.19, a Zenith OEM version of MS-DOS (1.25 or higher)
* MS-DOS 2.x – Support for IBM’s 10 MB hard disk drives, support up to 15 MB hard disk drives max, FAT12, user installable device drivers and tree-structure filing system
* Version 2.0 (OEM), First version to support 5.25-inch, 360 kB floppy drives and diskettes.
* Version 2.1 (OEM)
* Version 2.11 (OEM)
* Altos MS-DOS 2.11, an Altos OEM version of MS-DOS 2.11 for the ACT-86C
* TeleVideo PC DOS 2.11, an TeleVideo OEM version of MS-DOS 2.11
* MS-DOS 3.x
* Version 3.0 (OEM) – First version to support 5.25-inch, 1.2 MB floppy drives and diskettes, FAT16.
* Version 3.1 (OEM) – Support for Microsoft Networks
* Version 3.2 (OEM) – First version to support 3.5-inch, 720 kB floppy drives and diskettes.
* Version 3.21 (OEM)
* Version 3.22 (OEM) – (HP 95LX)
* Version 3.25 (OEM)
* Version 3.3 (OEM) – First version to support 3.5-inch, 1.44 MB floppy drives and diskettes.
* Version 3.3a (OEM)
* Version 3.31 (OEM) – supports FAT16B and larger drives.
* MS-DOS 4.0 (multitasking) and MS-DOS 4.1 – A separate branch of development with additional multitasking features, released between 3.2 and 3.3, and later abandoned. It is unrelated to any later versions, including versions 4.00 and 4.01 listed below
* MS-DOS 4.x (IBM-developed) – includes a graphical/mouse interface. It had many bugs and compatibility issues.
* Version 4.00 (OEM) – First version to support a single hard disk partition that is greater than 32 MiB and up to a maximum size of 2 GiB.
* Version 4.01 (OEM) – Microsoft rewritten Version 4.00 released under MS-DOS label but not IBM PC DOS. First version to introduce volume serial number when formatting hard disks and floppy disks (Disk duplication also and when using SYS to make a floppy disk or a partition of a hard drive bootable).
* Version 4.01a (OEM)
* MS-DOS 5.x
* Version 5.0 (Retail) – includes a full-screen editor. A number of bugs required reissue. First version to support 3.5-inch, 2.88 MB floppy drives and diskettes. Hard disk partitions greater than 32 MiB and up to a maximum size of 2 GiB was now provided by the MS-DOS kernel. First version to load portions of the operating system into the high memory area.
* AST Premium Exec DOS 5.0 (OEM) – a version for the AST Premium Exec series of notebooks with various extensions, including improved load-high and extended code page support.
* Version 5.0a (Retail) – With this release, IBM and Microsoft versions diverge.
* Version 5.50 (Windows NTVDM) – All Windows NT 32-bit versions ship with files from DOS 5.0

* MS-DOS 6.x
* Version 6.0 (Retail) – Online help through QBASIC. Disk compression, upper memory optimization and antivirus included.
* Version 6.2 – Scandisk as replacement for CHKDSK. Fix serious bugs in DBLSPACE.
* Version 6.21 (Retail) – Stacker-infringing DBLSPACE removed.
* Version 6.22 (Retail) – New DRVSPACE compression.
* MS-DOS 7.x
* Version 7.0 (Windows 95, Windows 95A) – Support for VFAT long file names and 32-bits signed integer errorlevel. New editor. JO.SYS is an alternative filename of the IO.SYS kernel file and used as such for "special purposes". JO.SYS allows booting from either CD-ROM drive or hard disk. Last version to recognize only the first 8.4 GB of a hard disk. The "VER" internal command prompt reports the Windows version 4.00.950.
* Version 7.1 (Windows 95B – Windows 98 – Windows 98SE) – Support for FAT32 file system. Last general purpose DOS to load Windows. The "VER" internal command prompt reports the Windows version 4.00.1111, 4.10.1998 or 4.10.2222.
* MS-DOS 8.0
* Version 8.0 (Windows ME) – Integrated drivers for faster Windows loading. Four different kernels (IO.SYS) observed. The "VER" internal command prompt reports the Windows version 4.90.3000.
* Version 8.0 (Windows XP) – DOS boot disks created by XP and later contain files from Windows ME. The "VER" internal command prompt reports the Windows version 5.1.

* MS-DOS Mobile 1.0 (Windows Phone) – This version was an April Fools' Day joke in 2015 by Microsoft. It is available on the Microsoft Store.
Microsoft DOS was released through the OEM channel, until Digital Research released DR DOS 5.0 as a retail upgrade. With PC DOS 5.00.1, the IBM-Microsoft agreement started to end, and IBM entered the retail DOS market with IBM DOS 5.00.1, 5.02, 6.00 and PC DOS 6.1, 6.3, 7, 2000 and 7.1.

Localized versions of MS-DOS existed for different markets. While Western issues of MS-DOS evolved around the same set of tools and drivers just with localized message languages and differing sets of supported codepages and keyboard layouts, some language versions were considerably different from Western issues and were adapted to run on localized PC hardware with additional BIOS services not available in Western PCs, support multiple hardware codepages for displays and printers, support DBCS, alternative input methods and graphics output. Affected issues include Japanese (DOS/V), Korean, Arabic (ADOS 3.3/5.0), Hebrew (HDOS 3.3/5.0), Russian (RDOS 4.01/5.0) as well as some other Eastern European versions of DOS.

== Use of undocumented APIs ==

Microsoft also used a variety of tactics in MS-DOS and several of their applications and development tools that, while operating perfectly when running on genuine MS-DOS (and PC DOS), would break when run on another vendor's implementation of DOS. Notable examples of this practice included:
 Microsoft's QuickPascal released in early 1989 was the first MS product that checked for MS-DOS by modifying the program's Program Segment Prefix using undocumented DOS functions, and then checked whether or not the associated value changed in a fixed position within the DOS data segment (also undocumented). This check also made it into later MS products, including Microsoft QuickC v2.5, Programmer's Workbench and Microsoft C v6.0.
 The AARD code, a block of code in the windows launcher (WIN.COM) and a few other system files of Windows 3.1. It was XOR encrypted, self-modifying, and deliberately obfuscated, using various undocumented DOS structures and functions to determine whether or not Windows really was running on MS-DOS. In the beta versions, it displayed an "error" message if the test for genuine MS-DOS failed, prompting the user to abort or continue, with abort the default. In the final release version, the code still ran, but the message and prompt were disabled by an added flag byte, rendering it (probably) ineffectual.
 Note that the Windows 3.0 beta code only gave a warning that Windows would not operate properly on a "foreign" OS. It did, in fact, run just fine on DR DOS 6.0.
 Interrupt routines called by Windows to inform MS-DOS that Windows is starting/exiting, information that MS-DOS retained in an IN_WINDOWS flag, in spite of the fact that MS-DOS and Windows were supposed to be two separate products.

== End of MS-DOS ==
With the introduction of Windows 3.0 in 1990, the easy usability of graphical user interface severely diminished the usage of MS-DOS which is based on the command line. With the release of Windows 95 (and continuing in the Windows 9x product line through to Windows ME), an integrated version of MS-DOS was used for bootstrapping, troubleshooting, and backwards-compatibility with old DOS software, particularly games, and no longer released as a standalone product. In Windows 95, the DOS, called MS-DOS 7, can be booted separately, without the Windows GUI; this capability was retained through Windows 98 Second Edition. Windows ME removed the capability to boot its underlying MS-DOS 8.0 alone from a hard disk, but retained the ability to make a DOS boot floppy disk (called an "Emergency Boot Disk") and can be hacked to restore full access to the underlying DOS.

In contrast to the Windows 9x series, the Windows NT-derived 32-bit operating systems developed alongside the 9x series (Windows NT, 2000, XP and newer) do not contain MS-DOS as part of the operating system, but provide a subset of DOS emulation to run DOS applications and provide DOS-like command prompt windows. 64-bit versions of Windows NT line do not provide DOS emulation and cannot run DOS applications natively. Windows XPcontains a copy of the Windows ME boot disk, stripped down to bootstrap only. This is accessible only by formatting a floppy as an "MS-DOS startup disk". Files like the driver for the CD-ROM support were deleted from the Windows ME bootdisk and the startup files (AUTOEXEC.BAT and CONFIG.SYS) no longer had content. This modified disk was the base for creating the MS-DOS image for Windows XP. Some of the deleted files can be recovered with an undelete tool.[38] With Windows Vista the files on the startup disk are dated April 18, 2005 but are otherwise unchanged, including the string "MS-DOS Version 8 Copyright 1981–1999 Microsoft Corp" inside COMMAND.COM. Starting with Windows 10, the ability to create a DOS startup disk has been removed.

MS-DOS 6.22 was the last standalone version produced by Microsoft for Intel 8088, Intel 8086, and Intel 80286 processors, which remain available for download via their MSDN, volume license, and OEM license partner websites, for customers with valid login credentials. MS-DOS is still used in embedded x86 systems due to its simple architecture and minimal memory and processor requirements, though some current products have switched to the still-maintained open-source alternative FreeDOS.

== Windows command-line interface ==
All versions of Microsoft Windows have had an MS-DOS-like command-line interface (CLI) called Command Prompt. This could run many DOS and variously Win32, OS/2 1.x and POSIX command line utilities in the same command-line session, allowing piping between commands. The user interface, and the icon up to Windows 2000, followed the native MS-DOS interface.

The 16-bit versions of Windows (up to 3.11) ran as a Graphical User Interface (GUI) on top of MS-DOS. With Windows 95, 98, 98 SE and ME, the MS-DOS part was (superficially) integrated, treating both operating systems as a complete package, though the DOS component could actually stand alone. The command line accessed the DOS command line (usually COMMAND.COM) through a Windows module (WINOLDAP.MOD).

A new line of Windows, (Windows NT), boot through a kernel whose sole purpose is to load Windows. One cannot run Win32 applications in the loader system in the manner that OS/2, UNIX or Consumer Windows can launch character-mode sessions.

The command session permits running of various supported command line utilities from Win32, MS-DOS, OS/2 1.x and POSIX. The emulators for MS-DOS, OS/2 and POSIX use the host's window in the same way that Win16 applications use the Win32 explorer. Using the host's window allows one to pipe output between emulations.

The MS-DOS emulation is done through the NTVDM (NT Virtual DOS Machine). This is a modified SoftPC (a former product similar to VirtualPC), running a modified MS-DOS 5 (NTIO.SYS and NTDOS.SYS). The output is handled by the console DLLs, so that the program at the prompt (CMD.EXE, 4NT.EXE, TCC.EXE), can see the output. 64-bit Windows does not have either the DOS emulation, or the DOS commands (EDIT, DEBUG, EDLIN), that come with 32-bit Windows.

The DOS version returns 5.00 or 5.50, depending on which API function is used to determine it. Utilities from MS-DOS 5.00 run in this emulation without modification. The very early beta programs of NT show MS-DOS 30.00, but programs running in MS-DOS 30.00 would assume that OS/2 was in control.

The OS/2 emulation is handled through OS2SS.EXE and OS2.EXE, and DOSCALLS.DLL. OS2.EXE is a version of the OS/2 shell (CMD.EXE), which passes commands down to the OS2SS.EXE, and input-output to the Windows NT shell. Windows 2000 was the last version of NT to support OS/2. The emulation is OS/2 1.30.

POSIX is emulated through the POSIX shell, but no emulated shell; the commands are handled directly in CMD.EXE.

The Command Prompt is often called the MS-DOS prompt. In part, this was the official name for it in Windows 9x and early versions of Windows NT (NT 3.5 and earlier), and in part because the SoftPC emulation of DOS redirects output into it. Actually only COMMAND.COMand other 16-bit commands run in an NTVDM with AUTOEXEC.NT and CONFIG.NT initialisation determined by _default.pif, optionally permitting the use of Win32 console applications and internal commands with an NTCMDPROMPT directive.

Win32 console applications use CMD.EXE as their command prompt shell. This confusion does not exist under OS/2 because there are separate DOS and OS/2 prompts, and running a DOS program under OS/2 will launch a separate DOS window to run the application.

All versions of Windows for Itanium (no longer sold by Microsoft) and x86-64 architectures no longer include the NTVDM and can therefore no longer natively run MS-DOS or 16-bit Windows applications. There are alternatives in the form of virtual machine emulators such as Microsoft's own Virtual PC, as well as VMware, DOSBox, and others.

== Legacy compatibility ==
From 1983 onwards, various companies worked on graphical user interfaces (GUIs) capable of running on PC hardware. However, this required duplicated effort and did not provide much consistency in interface design (even between products from the same company).

Later, in 1985, Microsoft Windows was released as Microsoft's first attempt at providing a consistent user interface (for applications). The early versions of Windows ran on top of MS-DOS. At first Windows met with little success, but this was also true for most other companies' efforts as well, for example GEM. After version 3.0, Windows gained market acceptance.

Windows 9x used the DOS boot process to launch into protected mode. Basic features related to the file system, such as long file names, were only available to DOS when running as a subsystem of Windows. Windows NT runs independently of DOS but includes NTVDM, a component for simulating a DOS environment for legacy applications.
