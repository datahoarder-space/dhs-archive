The Sophisticated Operating System, or SOS, is the primary operating system developed for the Apple III computer. The system was developed by Apple Computer, Inc. and released in 1980.

==Technical Details==

SOS is a single-tasking single-user operating system. SOS makes the resources of the Apple III available in the form of a menu-driven utility program as well as a programming application programming interface (API). A single program is loaded at boot time, called the interpreter. Once running, the interpreter can then use the SOS API to make requests of the system. The SOS API is divided into four main areas:

*File Calls: Create, destroy, rename, open, close, read, write files; set, get prefix (current working directory); set, get file information; get volume information; set, set mark, EOF, and level of files

*Device Calls: Get status, device number, information of a device; send device control data

*Memory Calls: Request, find, change, release memory segment; get segment information; set segment number

*Utility Calls: Get, set fence (event threshold); get, set time; get analog (joystick) data; terminate.

The Apple III System Utilities program shipped with each Apple III computer. It provides the user interface of the operating system itself, for system configuration and file management. The System Utilities program is menu-driven and performed tasks in three categories:

1. Device-handling commands: copy, rename, format, verify volumes (drives); list devices; set time and date

2. File-handling commands:lList, copy, delete, rename files; create subdirectories; set file write protection; set prefix (current working directory)

3. System Configuration Program (SCP): configure device drivers.

SOS has two types of devices it communicates with via their device drivers: character devices and block devices. Examples of SOS character devices are keyboards and serial ports. Disk drives are typical block devices. Block devices can read or write one or more 512-byte blocks at a time; character devices can read or write single characters at a time.

== Boot Sequence ==

When powered on, the Apple III runs through system diagnostics, then read block number zero from the built-in diskette drive into memory and executes it. SOS-formatted diskettes place a loader program in block zero. That loader program searches for, loads, and executes a file named SOS.KERNEL, which is the kernel and API of the operating system. The kernel in turn searches for and loads a file named SOS.INTERP (the interpreter, or program, to run) and SOS.DRIVER, the set of device drivers to use. Once all files are loaded, control is passed to the SOS.INTERP program.

Apple ProDOS uses the same file system as SOS. On a disk formatted by ProDOS, the ProDOS loader and SOS loader are written to blocks zero and one, respectively. The ProDOS loader includes code that can execute on an Apple III, and which will chainload the SOS loader from block one, so SOS and ProDOS can co-exist on the same volume. Some software, such as ADTPro, makes use of this to store Apple II and Apple III versions of a program on the same disk, which is then bootable on both systems.

==History==

In 1985 Steve Wozniak, while critical of the Apple III's hardware flaws, called SOS "the finest operating system on any microcomputer ever". Regardless of SOS's advantages, the system is not backward-compatible with DOS 3.2 and DOS 3.3, which most Apple II software used at the time. Though the Apple III itself was designed to be mostly backward-compatible with the Apple II Plus in hardware, users must boot Apple DOS from a separate disk to utilize Apple II series software, thus losing the advantages of SOS. Many average computer users also were not ready in 1980 for an operating system with the capabilities and flexible configuration options that SOS offers, especially combined with the Apple III's bad reputation due to poor engineering and its high retail price of nearly US $4,000
