# Structural Materials and Corrosion

- [Structural Materials and Corrosion](#structural-materials-and-corrosion)
  - [Stress and Strain](#stress-and-strain)
    - [Basic formulae](#basic-formulae)
    - [Stress-strain relationships](#stress-strain-relationships)
      - [Elastic](#elastic)
      - [Plastic or elasto-plastic](#plastic-or-elasto-plastic)
    - [Properties](#properties)
  - [Concrete](#concrete)
    - [Composition](#composition)
    - [Concrete Classification](#concrete-classification)
      - [Type Classification](#type-classification)
      - [Production](#production)
      - [Strength/Density](#strengthdensity)
      - [Special](#special)
    - [Properties of Cured Concrete](#properties-of-cured-concrete)
      - [Strength](#strength)
      - [Creep](#creep)
      - [Corrosion](#corrosion)
    - [Properties of Fresh Concrete](#properties-of-fresh-concrete)
      - [Tests to measure properties](#tests-to-measure-properties)
        - [Admixtures](#admixtures)
          - [Chemical Admixtures](#chemical-admixtures)
          - [Mineral Admixtures](#mineral-admixtures)
  - [Wood](#wood)
    - [Types of wood](#types-of-wood)

## Stress and Strain

### Basic formulae

$$\sigma = F/A_o\tag{Engineering Stress}$$
$$\epsilon = \frac{\Delta{l}}{l_o}\tag{Engineering Strain}$$
$$\tau = \frac{F}{A_o}\tag{Shear Stress}$$
$$\sigma_T = \frac{F}{A_i} \text{or} \sigma_E\cdot(1+\varepsilon_E)\tag{True Stress}$$
$$\varepsilon_T = ln[1+\varepsilon_E]\tag{True Strain}$$

### Stress-strain relationships

Stress strain are described by Young's modulus $\sigma = E\cdot\varepsilon$

- E is the slope of the linear elastic region

#### Elastic

- A deformation is elastic is the stress-strain relationship is proportional upon loading/unloading
- Non-permanent
- Corresponds to small changes in atomic spacing and stretching of atomic bonds

**Linear elastic** = straight-line relationship between stress and strain

**Nonlinear elastic** = nonlinear relationship between stress and strain

#### Plastic or elasto-plastic

- A deformation is plastic if the stress-strain relationship upon loading/unloading is non-proportional
- Corresponds to breaking of atomic bonds
- Yielding of a crystal is caused by shear stresses.
- Mohr's circle can help explain
  - $\sigma\prime = \sigma\cdot\cos^2(\theta)$

### Properties

**Proportionality Limit (P)** = point where linear region transitions to non-linear region

**Yield Stress $\sigma_y$** = point where elastic behaviour transitions to plastic behaviour

- if unknown, line made through 0.002 strain parallel to the linear-elastic region. Intersection point = yield stress

**Strain hardening** = further increase in stress in plastic region

**Ultimate tensile strength $\sigma_u$** = maximum tensile stress

**Necking** = localized narrowing of specimen after UTS reached

**Ductility** = degree of plastic deformation a material can sustain before fracture

$$ \%EL = \frac{l_f-l_o}{l_o}\tag{Percent Elongation}$$

$$ \%RA = \frac{A_o-A_f}{A_o}\tag{Area Reduction}$$

**Resilience** = capacity of a material to absorb energy during elastic deformation

- **Modulus of Resilience (U_r)** = strain energy per unit volume required to load a material up to the yield stress

$$ Ur = \int_0^{\varepsilon_y}{\sigma\cdot d\varepsilon}$$

> If the behaviour is linear elastic, $U_r = 0.5\cdot\sigma_y\cdot\varepsilon_y$

**Toughness** = capacity of a material to absorb energy up to fracture

- Area under the stress-strain curve up to fracture
- Also a measure of resistance to crack propagation
- Materials with high ductility tend to be tough because plastic flow reduces stress concentration at tip of crack


## Concrete

### Composition

Concrete consists of cement (10-15%), fine and course aggregate (60-75%), water(15-20%), and air (5-8%).

1. Paste - 25 to 40% of volume (cement and water)
2. Aggregate - 60 to 76% by volume (fine sand or course gravel)

**Portland Cement** = Made primarily of lime (CaO) from chalk or limestone and silica ($SiO_2$) from clay or shale.

### Concrete Classification

#### Type Classification

- Unreinforced (regular concrete)
- Reinforced (regular w/ rebar)
- Prestressed (w/ tensioned wire strands)

#### Production

- Ready-mix (small projects)
- Cast-in-place (transported to site and poured)
- Precast (premade pieces)

#### Strength/Density

- Low (<20 MPa)/(240-1800 kg/m^3)
- Normal (20-60 MPa)/(2150-2500 kg/m^3)
- High (>60 MPa)/(6400 kg/m^3)

#### Special

- Self-consolidating
  - Flows well
  - Resists segregation
- High-performance
  - Workable, strong, low w/c ratio, has superplasticizer
- Fibre-reinforced
  - Small metal-fibres close cracks
  - Higher tensile strength
  - Ductile and stiff
  - Fatigue resistant

### Properties of Cured Concrete

#### Strength

The Strength is dependent on the following

- w/c ratio. Lower ratio typically means stronger
- Aggregate strength
- Aggregate-cementous bond
- Moisture and temperature during curing
- Age of concrete (gains strength over time)
- Rate of loading when tested

Concrete is designed based on the f'c. This is the compressive strength of the concrete 28 days after being poured. The tensile strength is assumed to be zero when it is designed.

- Between 30-40% of the f'c, the behaviour is linear
- Between 40-50% of the f'c, bond cracks form
- Between 50-75% of the f'c, mortar cracks form
- Between 75-100% of the f'c, continuous cracks form until failure

#### Creep

- Caused by gel (viscous flow, seepage, microcracks), or deformation of aggregate

To find creep at $t_0$, use the following
$$E_c=4500\sqrt{f\prime_c}\tag{Simplified}$$

$$E_c=(3300\sqrt{f\prime_c}+6900)(\frac{\gamma_c}{2300})^(1.5)\tag{General}$$

To find time-dependent creep, use the following equation

$$ E_{ca}(t) = \frac{E_{c0}}{1+\phi_t} $$

#### Corrosion

Below are some the most common causes of concrete corrosion and the ways to mitigate them.

1. Corrosion of rebar (rust has 4x the volume of steel). Mitigated by increasing concrete cover.
2. Freeze/thaw (water expands 9% when frozen). Mitigated by air entrapment.
3. Alkali-aggregate rxn, mitigated by using non-reactive aggregate
4. Acid attack, mitigated by reducing permeability
5. Sulphate attack (reaction of sulphates with compounds formed as concrete cures, forming expansive compounds which crack concrete surface). Mitigated with low w/c ratio and mineral admixtures

### Properties of Fresh Concrete

- Workability = ease of placement, consolidation, and finishing
- Consistency = resistance to segregation or settling
- Setting time = time of curing until sufficient strength reached

These properties are influenced by the

- Amount of water and cement
- Fineness of sand
- Coarse aggregate size and shape
- Type of chemical and mineral admixtures

#### Tests to measure properties

**Slump Test** = controls workability and consistency

**Pressure Method Air Content Test** = measures air content in fresh concrete

##### Admixtures

###### Chemical Admixtures

**Air-entraining** = air provides freeze thaw resistance

- Volume of air for optimum frost resistance is 9% of the mortar fraction of concrete
- May improve workability and consistency
- 3-5% decrease in $f\prime_c$ for each 1% entrained air

**Water-reducing or plasticizing** = increase workability, allow reduced water content

- increase strength, durability, and decrease porosity

**set-controlling** = help regulate setting-time

- 2 types = retarders and accelerators

###### Mineral Admixtures

**Fly Ash** = increase strength and workability

**Silica fume** = reduce permeability

## Wood

### Types of wood
