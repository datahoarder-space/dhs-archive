In computing, floating point operations per second (FLOPS, flops or flop/s) is a measure of computer performance, useful in fields of scientific computations that require floating-point calculations. For such cases it is a more accurate measure than measuring instructions per second.

The similar term FLOP is often used for floating-point operation, for example as a unit of counting floating-point operations carried out by an algorithm or computer hardware.


== Floating-point arithmetic ==

Floating-point arithmetic is needed for very large or very small real numbers, or computations that require a large dynamic range. Floating-point representation is similar to scientific notation, except everything is carried out in base two, rather than base ten. The encoding scheme stores the sign, the exponent (in base two for Cray and VAX, base two or ten for IEEE floating point formats, and base 16 for IBM Floating Point Architecture) and the Significand (number after the radix point). While several similar formats are in use, the most common is ANSI/IEEE Std. 754-1985. This standard defines the format for 32-bit numbers called single precision, as well as 64-bit numbers called double precision and longer numbers called extended precision (used for intermediate results). Floating-point representations can support a much wider range of values than fixed-point, with the ability to represent very small numbers and very large numbers.

'''Dynamic range and precision'''

The exponentiation inherent in floating-point computation assures a much larger dynamic range – the largest and smallest numbers that can be represented – which is especially important when processing data sets which are extremely large or where the range may be unpredictable. As such, floating-point processors are ideally suited for computationally intensive applications.

'''Computational performance'''

FLOPS and MIPS are units of measure for the numerical computing performance of a computer. Floating-point operations are typically used in fields such as scientific computational research. The unit MIPS measures integer performance of a computer. Examples of integer operation include data movement (A to B) or value testing (If A = B, then C). MIPS as a performance benchmark is adequate when a computer is used in database queries, word processing, spreadsheets, or to run multiple virtual operating systems. Frank H. McMahon, of the Lawrence Livermore National Laboratory, invented the terms FLOPS and MFLOPS (megaFLOPS) so that he could compare the supercomputers of the day by the number of floating-point calculations they performed per second. This was much better than using the prevalent MIPS to compare computers as this statistic usually had little bearing on the arithmetic capability of the machine.


== Performance records ==


'''Single computer records'''

In June 1997, Intel's ASCI Red was the world's first computer to achieve one teraFLOPS and beyond. Sandia director Bill Camp said that ASCI Red had the best reliability of any supercomputer ever built, and "was supercomputing's high-water mark in longevity, price, and performance".

NEC's SX-9 supercomputer was the world's first vector processor to exceed 100 gigaFLOPS per single core.

For comparison, a handheld calculator performs relatively few FLOPS. A computer response time below 0.1 second in a calculation context is usually perceived as instantaneous by a human operator, so a simple calculator needs only about 10 FLOPS to be considered functional.

In June 2006, a new computer was announced by Japanese research institute RIKEN, the MDGRAPE-3. The computer's performance tops out at one petaFLOPS, almost two times faster than the Blue Gene/L, but MDGRAPE-3 is not a general purpose computer, which is why it does not appear in the Top500.org list. It has special-purpose pipelines for simulating molecular dynamics.

By 2007, Intel Corporation unveiled the experimental multi-core POLARIS chip, which achieves 1 teraFLOPS at 3.13 GHz. The 80-core chip can raise this result to 2 teraFLOPS at 6.26 GHz, although the thermal dissipation at this frequency exceeds 190 watts.

On June 26, 2007, IBM announced the second generation of its top supercomputer, dubbed Blue Gene/P and designed to continuously operate at speeds exceeding one petaFLOPS. When configured to do so, it can reach speeds in excess of three petaFLOPS.

In June 2007, Top500.org reported the fastest computer in the world to be the IBM Blue Gene/L supercomputer, measuring a peak of 596 teraFLOPS. The Cray XT4 hit second place with 101.7 teraFLOPS.

On October 25, 2007, NEC Corporation of Japan issued a press release announcing its SX series model SX-9, claiming it to be the world's fastest vector supercomputer. The SX-9 features the first CPU capable of a peak vector performance of 102.4 gigaFLOPS per single core.

On February 4, 2008, the NSF and the University of Texas at Austin opened full scale research runs on an AMD, Sun supercomputer named Ranger, the most powerful supercomputing system in the world for open science research, which operates at sustained speed of 0.5 petaFLOPS.

On May 25, 2008, an American supercomputer built by IBM, named 'Roadrunner', reached the computing milestone of one petaFLOPS. It headed the June 2008 and November 2008 TOP500 list of the most powerful supercomputers (excluding grid computers). The computer is located at Los Alamos National Laboratory in New Mexico. The computer's name refers to the New Mexico state bird, the greater roadrunner (Geococcyx californianus).

In June 2008, AMD released ATI Radeon HD 4800 series, which are reported to be the first GPUs to achieve one teraFLOPS. On August 12, 2008, AMD released the ATI Radeon HD 4870X2 graphics card with two Radeon R770 GPUs totaling 2.4 teraFLOPS.

In November 2008, an upgrade to the Cray XT Jaguar supercomputer at the Department of Energy's (DOE's) Oak Ridge National Laboratory (ORNL) raised the system's computing power to a peak 1.64 petaFLOPS, making Jaguar the world's first petaFLOPS system dedicated to open research. In early 2009 the supercomputer was named after a mythical creature, Kraken. Kraken was declared the world's fastest university-managed supercomputer and sixth fastest overall in the 2009 TOP500 list. In 2010 Kraken was upgraded and can operate faster and is more powerful.

In 2009, the Cray Jaguar performed at 1.75 petaFLOPS, beating the IBM Roadrunner for the number one spot on the TOP500 list.

In October 2010, China unveiled the Tianhe-1, a supercomputer that operates at a peak computing rate of 2.5 petaFLOPS.

As of 2010 the fastest six-core PC processor reaches 109 gigaFLOPS (Intel Core i7 980 XE) in double precision calculations. GPUs are considerably more powerful. For example, Nvidia Tesla C2050 GPU computing processors perform around 515 gigaFLOPS in double precision calculations, and the AMD FireStream 9270 peaks at 240 gigaFLOPS. In single precision performance, Nvidia Tesla C2050 computing processors perform around 1.03 teraFLOPS and the AMD FireStream 9270 cards peak at 1.2 teraFLOPS. Both Nvidia and AMD's consumer gaming GPUs may reach higher FLOPS. For example, AMD's HemlockXT 5970 reaches 928 gigaFLOPS in double precision calculations with two GPUs on board and the Nvidia GTX 480 reaches 672 gigaFLOPS with one GPU on board.

On December 2, 2010, the US Air Force unveiled a defense supercomputer made up of 1,760 PlayStation 3 consoles that can run 500 teraFLOPS.

In November 2011, it was announced that Japan had achieved 10.51 petaFLOPS with its K computer. It is still under development and software performance tuning is currently underway. It has 88,128 SPARC64 VIIIfx processors in 864 racks, with theoretical performance of 11.28 petaFLOPS. It is named after the Japanese word "kei", which stands for 10 quadrillion, corresponding to the target speed of 10 petaFLOPS.

On November 15, 2011, Intel demonstrated a single x86-based processor, code-named "Knights Corner", sustaining more than a teraFLOPS on a wide range of DGEMM operations. Intel emphasized during the demonstration that this was a sustained teraFLOPS (not "raw teraFLOPS" used by others to get higher but less meaningful numbers), and that it was the first general purpose processor to ever cross a teraFLOPS.

On June 18, 2012, IBM's Sequoia supercomputer system, based at the U.S. Lawrence Livermore National Laboratory (LLNL), reached 16 petaFLOPS, setting the world record and claiming first place in the latest TOP500 list.

On November 12, 2012, the TOP500 list certified Titan as the world's fastest supercomputer per the LINPACK benchmark, at 17.59 petaFLOPS. It was developed by Cray Inc. at the Oak Ridge National Laboratory and combines AMD Opteron processors with "Kepler" NVIDIA Tesla graphic processing unit (GPU) technologies.

On June 10, 2013, China's Tianhe-2 was ranked the world's fastest with 33.86 petaFLOPS.

On June 20, 2016, China's Sunway TaihuLight was ranked the world's fastest with 93 petaFLOPS on the LINPACK benchmark (out of 125 peak petaFLOPS). The system, which is almost exclusively based on technology developed in China, is installed at the National Supercomputing Center in Wuxi, and represents more performance than the next five most powerful systems on the TOP500 list combined.

'''Distributed computing records'''

Distributed computing uses the Internet to link personal computers to achieve more FLOPS:

As of October 2016, the Folding@home network has over 100 petaFLOPS of total computing power. It was the first computing project of any kind to cross the 1, 2, 3, 4, and 5 native petaFLOPS milestones. This level of performance is primarily enabled by the cumulative effort of a vast array of powerful GPU and CPU units.
As of January 2018, the entire BOINC network averages about 20 petaFLOPS.
As of July 2014, SETI@Home, employing the BOINC software platform, averages 681 teraFLOPS.
As of July 2014, Einstein@Home, a project using the BOINC network, is crunching at 492 teraFLOPS.
As of July 2014, MilkyWay@Home, using the BOINC infrastructure, computes at 471 teraFLOPS.
As of January 2017, GIMPS, is searching for Mersenne primes and sustaining 300 teraFLOPS.

'''Future developments'''

In 2008, James Bamford's book The Shadow Factory reported that NSA told the Pentagon it would need an exaflop computer by 2018.

Given the current speed of progress, supercomputers are projected to reach 1 exaFLOPS (EFLOPS) in 2018. Cray, Inc. announced in December 2009 a plan to build a 1 EFLOPS supercomputer before 2020. Erik P. DeBenedictis of Sandia National Laboratories theorizes that a zettaFLOPS (ZFLOPS) computer is required to accomplish full weather modeling of two week time span. Such systems might be built around 2030.
