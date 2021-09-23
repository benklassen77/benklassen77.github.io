# Foundation Design

- [Foundation Design](#foundation-design)
  - [Course Overview](#course-overview)
  - [Introduction](#introduction)
  - [Mohr Circle](#mohr-circle)

## Course Overview

CIVE  354  covers  the  analysis,  design,  and  construction  aspects  of  foundations  (particularly shallow  foundations),  slopes,   and  retaining  structures.  The  main  objective  of  CIVE  354  is  to  enable  students  to  select  the  best  foundation solution  for  different  types  of  civil  engineering  structures.  After  completing  the  course, students  should  be  able  to  design  shallow foundations, slopes, and retaining structures for routine projects and supervise their constructions.

|Person|Contact|
|----|----|
|Dipanjan Basu|dipanjan.basu@uwaterloo.ca|
|Hesham Elhuni|helhuni@uwaterloo.ca|
|Abhisek Paul|a33paul@uwaterloo.ca|

Resource: [The Engineering of Foundations (Selgado, 2008)](https://benklassen77.github.io/documents/courses/design/foundation/foundationtextbook.pdf)

## Introduction

Wide base gives more stability to structures than thin bases. All buildings are relient on the base.

Geotechnical engineering is a combination of differenc sciences. Soil mechanics, rock mechanics, and engineering geology are fundamental sciences that contribute to design. Applications are made for foundation design, slope design, and retaining structures. Other applicaitions include landfill design, waste containment, and subsurface remediation and cleanup.

**Geotechnical engineering**: concerned with the use of earth materials for improving and defending society and life. It involves systematic application of scientific principles and techniques for constructions on, on, or with geomaterials.

**Foundation engineering**: process of solving problems that involve safe and economical transfer of structural loads to the ground

Foundations are transition elements between the superstructure and the ground that transmit loads. Of these, shallow foundations, such as footings or rafts, are built near the ground surface. Deep foundations, such as piles or caissons, penetrate deep into the ground. Shallow foundations are often created using reinforced concrete. Piles are slender column-like structures, made of reinforced concrete (cylindrical or square), steel pipes, or H sections. Single piles under each column or multiple piles are considered a pile group, which have a rigid slab on top, known as a pile cap. Shallow foundations transfer the load in horizontal directions, while deep foundations transfer it vertically. For deep foundations, transportation and manufacturing loads must be considered.

![Shallow Foundations](https://i.imgur.com/nHnoIKK.png?2)

![Deep Foundations](https://i.imgur.com/7Kwg2mN.png?1)

Retaining structures or retaining walls are built to create space - temporary ot permanent - for a definite purpose. A retaining wall is any constructed wall that holds back soil, liquid, or other materials where there is an abrupt change in elevation.

- **Gravity retaining walls**: massive walls that work on the principle of gravity for stability
- **Embedded walls**: slender walls that are embedded in ground for stability
  - **Pre-formed walls**: made of thin steel, timber, or concrete sheets that are driven into the ground. Also called sheet pile walls
  - **In situ walls**: constructed by excavating deep trehcnes or auger holes, placing reinforcement and filling with concrete - diaphragm walls and bored pile walls are popular examples
- **Composite or Hybrid Walls**: composite construction using a variety of materials with a variety of support systems. They use both gravity and embedded walls

Wall construction of a gravity wall follows these steps: excavation, preparing the site, constructing the wall, and putting in backfill soil. For embedded walls, you could either drive a wall or dig a trench or auger hole and pour concrete and reinforcement. You could put props or anchors as necessary

There are two types of slopes: natural and artificial. On basis of extent, infinite and finite. Mountain and hill slopes are natural and infinite, while hill side cuttings for road construciton; embankments for roads, railways, and canels, and earth dams and mines are all artificial and finite

Sequence of activities

1. Owner/Developer aquires site
2. Owner hires architects/consultants
3. Consultant hires specialty contractors/consultants
4. Planning, analysis, design, construction, testing
5. Monitoring/Performance evaluation

![Order of events](https://i.imgur.com/6317fpy.png?1)

![Timelines](https://i.imgur.com/sPYPJ1M.png?1)

![Detailed activities](https://i.imgur.com/zJZYMWz.png?1)

To determine information on the existing foundations for reuse, load-tests or vibration tests are used.

From this process, choices need to be made on the foundation/retaining structure type, design parameters and methods, construction and testing methods, and monitoring methods. The selection is based on feasibility, constructability, availability of construction equipment, project-specific factors (eg. deadline), and environmental factors.

In general, design aims at stopping failures. Limit states are identified and prevented from being breached. A **limit state** is an unacceptable condition with respect to performance. If it is successful, a limit state is not reached or breached. Limit states separate desired states of a structure from undesired states. 

**Serviceability Limit States** are a set of unacceptable conditions related to performance (excessive settlement, differential settlement or tilt). Excessive settlement leads to malfunctioning service lines, and excessive uneven settlement leads to building cracks

**Ultimate Limit States** are a set of unacceptable conditions related to Safety/Danger (collapse or breakage). Bearing capacity failure leads to plunging of foundation, and excessive settlement leads to complete collapse

A successful structure should pass strength, serviceability, constructability, economy, deformation, connection, utility, drainage, access, and aesthetic requirements add. To eurocode, specific requirements include serviceability, safety, fire, and robustness.

There are three foundation design approaches. Working/Allowable Stress Design (WSD/ASD), or factor of safety design; Limit State Design (LSD), or load and resistance factor design (LRFD); reliability based design (RBD), or probabilistic estimation of safety against potential failures, to account for different uncertainties. Probabilistic approach used for nuclear or difficult facilities.

For WSD

- calculate ultimate capacity (or resistance), $C_{textrm{ultimate}}$ to correspond to a ULS.
- estimate working load also called design load $L_{\textrm{working}}$
- decide on required factor of safety, FS
- design to ensure that $\frac{C_{\textrn{ultimate}}}{FS}=C_{\textrm{allowable}}\geq{L_{\textrm{working}}}$

$$C_{\textrm{ultimate}}=(cN_c+qN_q+\frac{1}{2}\gamma{BN_{\gamma}})(B\times{L})\tag{Ultimate Capacity}$$

$$\frac{C_{\textrm{ultimate}}}{FS}=C_{\textrm{allowable}}\geq{L_{\textrm{allowable}}}$$

See Figure below for typical factors of safety:

![FS](https://i.imgur.com/dqqG6NM.png?1)

Multiple load combinations should be considered and the worst combination should be used to calculate the design load. ASCE recommends 8 possibilities. See Figure below:

![LC](https://i.imgur.com/pxCDJ41.png?1)

For LSD

- identify limit states
- design against all limit states such that the limit states are not reached
- considers uncertainties in a more rigorous way. Quantifies specific problems rather than joining them all into a single factor (WSD)
- $C_{\textrm{ultimate}}\geq{C_{\textrm{ultimate}}}$, C_{\textrm{limit state}}\geq{C_{\textrm{limit state}}}$
- For LRFD, $\phi{C_{\textrm{nominal}}}>\alpha{L_{\textrm{nominal}}}$, with $\phi$ being the resistance factor and $\alpha$ being the load factor. These factors are derived on a probabilistic approach

There are several uncertainties in geotechnical engineering. Geological features and subsurface conditions, such as soil properties, soil boundaries, groundwater, contamination, obstruction, and service lines are examples of these. Loads are assumed. Models are all wrong, some are useful. Human factors, such as knowledge lack, calculation or measurement errors, or communications, cause big problems

For probabilistic analysis, applied load D and resistance C are uncertain random variables plotted below

![Probabilistic](https://i.imgur.com/C6FzhPX.png?1)

$\beta$ is the reliability index. This is related to the probability of failure $p_f$

![Reliability Analysis](https://i.imgur.com/JDgUUH9.png?1)

![Nominal vs. Mean](https://i.imgur.com/00VorEZ.png?1)

Coefficients of variation are used in probabilistic analysis to determine the likelihood of problems.

In North America, *Load and resistance factor design* (LRFD) is a limit state design that is based upon probabilistic analysis. For multiple loads and resistances, use the following:

$$\sum{\phi_iR_i}\geq{\sum{\alpha_iL_i}}\tag{LRFD}$$

There are alsl LRFD-specific load combinations. The maximum of these is the limit state load used in the equation. See combinations below:

![LRFD Load Combinations](https://i.imgur.com/RpEVL2x.png?1)

Canadians and Americans use LRFD, Europeans use LSD, and others use WSD.

Some limitations of LRFD is that resistance factors are not available for all types of geostructures based on proper quantification of geotechnical uncertainty and associated probabilistic analysis. The method is only applied to ULS and not SLS. Going forward, geo engineering needs to consider the 4 Es: engineering, equity, economy, and environment. In addition to these sustainable developments, geo-engineering needs to gain resilience. Analysis, design, and management against extreme events, including multi-hazards and resilience assessment, are being considered. **Resilience** is the practice of maintaining a structure by predicting failure or identifying failure and fixing problem prior to fail.

## Mohr Circle

There are two conditions: in-situ and field. The in-situ case has no shear stress acting on the elemebt, but has shear stresses present. Once loaded, the principle stresses increase. As distance from the midline increases, so does shear, as well as principle stresses. See below:

![In-situ condition](https://i.imgur.com/vk4WtOp.png?2)

![Loaded condition](https://i.imgur.com/Z9xe6Vb.png?1)

Stresses can be found using the formulae below:

![Stresses on Plane](https://i.imgur.com/vHwqlz3.png?1)

**Elasticity**: fully recoverable strains

**Plasticity**: non recoverable strains

The figures below show steel and soil deformations as a function of stress, respectively:

![Steel Stress vs. Strain](https://i.imgur.com/MTlZmQ1.png?1)

![Soil Stress vs. Strain](https://i.imgur.com/12rUoiL.png?2)

There are three tests used: triaxial, unconfined compression, and direct shear. **Triaxial** applies axial stress, which is complemented by a leteral confining stress. **Unconfined compression** only has an axial stress - this is only appropriate for clay. **Direct shear** applies a normal stress and shear stress simultaneously, and assumes zero cohesion.

$$\tau_f=c+\sigma\tan{\phi}$$

$$\tau_f=\frac{1}{2}(\sigma_{1f}-\sigma_{3f})\cos{\phi}$$

$$\sigma_f=\frac{\sigma_{1f}+\sigma_{3f}}{2}-\frac{(\sigma_{1f}-\sigma_{3f})\sin\phi}{2}$$

There are three states of interest: peak, critical, and mobilized. Peak is at the top of the stress-strain curve, critical is at the end, and mibilized is at any part. The cohesion at the critical state is zero.
