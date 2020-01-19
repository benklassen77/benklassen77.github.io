# Structural Materials and Corrosion

- [Structural Materials and Corrosion](#structural-materials-and-corrosion)
  - [Stress and Strain](#stress-and-strain)
    - [Basic formulae](#basic-formulae)
    - [Stress-strain relationships](#stress-strain-relationships)
      - [Elastic](#elastic)
      - [Plastic or elasto-plastic](#plastic-or-elasto-plastic)
    - [Strengthening Mechanisms](#strengthening-mechanisms)
    - [Mohr's Circle](#mohrs-circle)
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
      - [Basic Concrete Corrosion](#basic-concrete-corrosion)
    - [Properties of Fresh Concrete](#properties-of-fresh-concrete)
      - [Tests to measure properties](#tests-to-measure-properties)
        - [Admixtures](#admixtures)
          - [Chemical Admixtures](#chemical-admixtures)
          - [Mineral Admixtures](#mineral-admixtures)
  - [Forms of Fracture](#forms-of-fracture)
    - [Ductile Fracture](#ductile-fracture)
    - [Brittle Fracture](#brittle-fracture)
  - [Fatigue](#fatigue)
    - [Miner's Sum](#miners-sum)
    - [SN Approach](#sn-approach)
    - [Fracture Mechanics Approach](#fracture-mechanics-approach)
    - [Fatigue problem solutions](#fatigue-problem-solutions)
    - [Factors affecting fatigue life](#factors-affecting-fatigue-life)
  - [Steel](#steel)
    - [Iron-Carbide Systems](#iron-carbide-systems)
    - [Manufacturing Process](#manufacturing-process)
    - [Steel Properties](#steel-properties)
  - [Aluminum](#aluminum)
    - [Properties of 6061](#properties-of-6061)
  - [Composites](#composites)
    - [Fibre-reinforced](#fibre-reinforced)
    - [Common Fibre-reinforced Composites](#common-fibre-reinforced-composites)
  - [Wood](#wood)
    - [Macrostructure](#macrostructure)
    - [Microstructure](#microstructure)
    - [Properties of Wood](#properties-of-wood)
    - [Engineering Wood Products](#engineering-wood-products)
  - [Glass](#glass)
  - [Corrosion](#corrosion)
    - [Metal Corrosion](#metal-corrosion)
    - [Concrete Corrosion](#concrete-corrosion)
    - [Corrosion Prevention](#corrosion-prevention)

## Stress and Strain

### Basic formulae

$$\sigma = F/A_o\tag{Engineering Stress}$$
$$\epsilon = \frac{\Delta{l}}{l_o}\tag{Engineering Strain}$$
$$\tau = \frac{F}{A_o}\tag{Shear Stress}$$
$$\sigma_T = \frac{F}{A_i}  \text{or}  \sigma_E\cdot(1+\varepsilon_E)\tag{True Stress}$$
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
- In polycrystalline material, slip planes exist within grain boundaries. The direction of a slip plane changes from one grain to the next. Overall distortion of the material is due to distortion of the individual grains.
  - During deformation, grain boundaries do not come apart but rather constrain each other. Thus, polycrystalline materials are stronger than not. As well, fine-grained materials are stronger

### Strengthening Mechanisms

**Strain hardening (cold working** = further increase in stress in plastic region

- Since dislocations pile up, dislocations end up interfering with other dislocations. Hence, dislocation mobility decreases and strength increases

**Grain size reduction** = $\sigma_y \alpha \frac{1}{sqrt{grain size}}$

**Solid solution strengthening** = impurity atoms form a substitutional or interstitial solid solution, and obstruct dislocation movement

On the contrary, annealing decreases strength. However, it does increase ductility.

### Mohr's Circle

> Yielding of crystal is caused by shear stresses, and is maximized when $\theta = 45\degree$

$$\sigma\prime = \sigma\cdot\cos^2(\theta)\tag{Axial along fracture plane}$$
$$\tau\prime = \sigma\cdot\sin(\theta)\cdot\cos(\theta)\tag{Shear along fracture plane}$$

![Mohr's Circle](https://i.imgur.com/wUzoU23.png) ![Mohr's 2](https://i.imgur.com/eD4zM6w.png?1)

### Properties

**Proportionality Limit (P)** = point where linear region transitions to non-linear region

**Yield Stress $\sigma_y$** = point where elastic behaviour transitions to plastic behaviour

- if unknown, line made through 0.002 strain parallel to the linear-elastic region. Intersection point = yield stress

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
$$\varepsilon_{c}(t) = \frac{\sigma}{E_{ca}(t)}\tag{Creep Equation}$$
$$ E_{ca}(t) = \frac{E_{c0}}{1+\phi_t}\tag{Age-Adjusted Modulus} $$

- $E_{c0}$ = elastic modulus at $t = 0$

#### Basic Concrete Corrosion

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

## Forms of Fracture

### Ductile Fracture

- evidence of plastic deformation, like necking, and irregular surfaces

In simple terms, let's say there is a plate with axial pressure being applied at the x-sectional area. Thus, $\sigma = \frac{P}{A}$.

One could design this such that $\sigma \leq F_y$, or $P \leq A\cdot F_y$. This is because a fracture will occur once $\sigma = F_y$.

However, engineers prefer limit state design. In this case, one would design with load factors ($\alpha$) and resistance factors($\phi$). See below equation for proper design

$$\alpha_{dead}\cdot P_{dead} + \alpha_{live}\cdot P_{live}\leq \phi\cdot A\cdot F_y$$

### Brittle Fracture

- little or no prior deformation
- rapid crack propagation

If a metal has a brittle failure, it fails before $\sigma = F_y$.

There are 3 modes of crack propagation.

![Crack Propagation](https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Fracture_modes_v2.svg/800px-Fracture_modes_v2.svg.png)

The most common form is Mode $\Romannumeral #1$. In order to design against this, the stress intensity factor $K$ is used. It is not the material toughness, but it is similar.

In order to design according to this for mode I, the following formula is used.

$$K_{Ic} \geq Y\cdot\sigma\cdot\sqrt{\pi\cdot a}$$

## Fatigue

**Fatigue** = failure, at relatively low stress levels, or structures subjected to cyclic stresses

Fatigue stages

1. Crack initiation
   - cracks normally initiate at stress concentrations
   - cyclic loading produces microscopic surface discontinuities due to dislocation slip
2. Crack propagation
   - crack surface characterized by microscopic striations
   - correspond w/ the crack growth per cycle
3. Final failure
   - occurs rapidly, once crack reaches critical size
   - may be either a ductile or brittle fracture. Determined by studying the failure surface

With cyclic loading, N cycles are considered. The fatigue life is the amount of N cycles given a mean stress range, $\Delta\sigma$.

There are 2 methods to determine the fatigue-life = the S-N Curve and the fracture methods approaches.

### Miner's Sum

$$ Total Damage = \sum{\frac{n_i}{N_i}}\tag{Miner's Sum}$$

- predicts fatigue life under variable amplitude loading conditions

- $n_i$ is the number of cycles in given stress range
  - Counted using reservoir, rainflow, and range-mean methods
- $N_i$ is the number of cycles that would cause failure at that stress range
  - Found with [S-N](#sn-approach) or with [Fracture Mechanics](#fracture-mechanics-approach)

> D is normally assumed to be zero.

S-N pros and cons

Pros: simple, considers crack initiation and propagation

Cons: gives no information about crack size or growth rate, and thus cannot be used when a crack is detected

### SN Approach

- graph log($\Delta\sigma$) vs. log(N)
- the higher the stress range, the lower the fatigue life
- SN graphs contain a line of best fit and a 95% survivability line from a larger scatter plot

Low cycle fatigue $N = 10^4 - 10^5$

- high stress range with plastic deformation

High cycle fatigue $N > 10^5$

- elastic loading only - low stress range

**Fatigue Limit** = Below this, fatigue life is infinite

### Fracture Mechanics Approach

1. Initial crack depth $a_0$ assumed
2. Crack growth rate $\frac{da}{dN}$ is related to the stress intensity factor range $\Delta K$, since $\Delta K = Y\cdot\Delta\sigma\cdot\sqrt{\pi\cdot a}$ and $\Delta\sigma = \sigma_{max} - \sigma_{min}$
3. Integrate the differential equation ($\frac{da}{dN} = C\cdot\Delta K^m$) from the original crack depth to the critical crack depth, following the below equation. Note that C and m are material constants (often $C = 3\cdot 10^{-13}$ and $m = 3$ for steel)

$$ N_c = \int_{a_0}^{a_c}{\frac{da}{C\cdot (\Delta\sigma\cdot Y\cdot\sqrt{\pi\cdot a})^m}}$$

Pros: crack size and growth rate estimated at any point in time, and thus optimal inspection frequency

Cons: more complicated

### Fatigue problem solutions

If it's a new structure...

1. Use a different material
2. Reduce $a_0$ w/ quality control
3. Surface treatment
4. Reduce stress by increasing x-sectional area
5. Reduce stress concentration (eg. fillet)

If it's an existing structure...

1. Reduce traffic volume
2. Reduce maximum load
3. Reduce stress
4. Increase inspection frequency

### Factors affecting fatigue life

1. Stress range. Higher the stress range, the lower the fatigue life
2. Mean stress level. As mean stress level increases, fatigue life decreases
3. Surface conditions. The smoother the surface, the greater the fatigue life
4. Presence of a stress concentration. Higher the stress concentration, the lower the fatigue life.
5. Surface treatment.
   - Polishing and grinding remove surface defects ir make it smoother
   - Shot peening increases fatigue life by introducing compressive residual surface stresses. It acts similar to decreasing mean stress level

## Steel

### Iron-Carbide Systems

**Ferrite** = soft, ductile, exists at room temperature

**Austenite** = exists above $727 \degree C$

**Cementite** = forms at 6.7% carbon, very hard and brittle

- Depending on how quickly austenite cools, it can form bainite, fine or course pearlite, spheroidite, or martensite.

**Tempering** = in order to relieve internal stresses in martensite and improve ductility, martensite is heated up after it's rapid cooling to be tempered.

![Steel forms](https://i.imgur.com/BzSxqaz.png?1)

### Manufacturing Process

1. Iron ore, coke, and lime mixed in a blast furnace to make liquid iron (4-4.5% C)
2. Liquid iron passed into BOS furnace to reduce C content to 0-1.5 %
3. Steel continuously cast into solid slabs, which are hot-rolled into useful shapes
4. Steel may be shaped with cold-rolling, galvanized, tempered, shot-peened, or whatever treatment is needed

**Wrought iron** = 0 - 0.08% C. Easily deformed.

**Steel** = 0.08 - 2.14% C Strong, but corrosion susceptable.

**Cast iron** = 2.14 - 6.7% C Brittle, but easily melted.

### Steel Properties

- Normally $< 1.0\% C$
- Low Carbon Steel (<0.25% C)
  - Soft, weak, ductile, cheap, weldable and machinable
  - $F_y \sim 275$ MPa, $F_u \sim 415-500$ MPa
  - Car bodies
- High strength low alloy (HSLA) steel
  - Corrosion resistant
  - Up to 10% alloy
  - $F_y > 480$ MPa
- Medium Carbon Steel (0.25-0.6% C)
  - Often tempered martensite
  - Gears etc.
- High-carbon steel (0.6-1.4% C)
  - Strongest and least ductile
  - sharp cutting edges
- Stainless steel
  - Corrosion resistant
  - 11% alloy at least
- Structural steel
  - $260 < F_y < 550$, $460 < F_u < 650$. 350 $F_y$ most common
  - W = weldable, T = notch tough, R = atmospheric and corrosion resistant, A = R but also weldable, Q = quenched and tempered

It is important to recognize the self-equilibriating stresses within steel.

## Aluminum

1. Bauxite is mined
2. Alumina is extracted from bauxite
3. Pure alumina is reduced
4. Primary aluminum is made into an alloy
5. Aluminum alloy is casted

### Properties of 6061

- $\sigma_y$ = 275MPa, $\sigma_u$ = 310MPa
- Welding aluminum results in a heat affected zone, making it weaker. For this reason, friction stir welding is preferred.
- In thin-walled aluminum, buckling is known to take place.
- Corrosion resistant, light-weight and extrudable
- Strengthened by solution heat treatment and precipitation heat treatment (artificial aging)

## Composites

3 types

1. Particle Reinforced
   - Cement is expensive, aggregate is cheap
2. Fibre-reinforced
   - Fibreglass GFRP
3. Structural (eg. steel-concrete composite beam)

### Fibre-reinforced

- A fibre-matrix bond is present. Within this, $\tau_c$ is the shear strength of the bond, while $\sigma^*_f$ is the fibre strength.

![Fibre Matrix Bond](https://i.imgur.com/r9zu7kQ.png?2)

The critical length of a fibre is below.

$$l_c = \frac{\sigma_f^*\cdot d}{2\cdot\tau_c}$$

- fibres are continuous if $l>15\cdot l_c$ and discontinuous otherwise
- the maximum fibre-stress is felt in the middle of the strand if $l = l_c$. If $l>l_c$, the stress will be sustained across the middle (not exceeded).

$$E_{ct} = \frac{E_m\cdot E_f}{(1-\phi_f)\cdot E_f + \phi_f\cdot E_m}\tag{Young's Modulus Transverse}$$

$$E_{cl} = E_m\cdot (1-\phi_f) + E_f\cdot \phi_f\tag{Young's Modulus Longitudinal}$$

- fibres phase brittle, matrix ductile

> It is assumed that $\varepsilon_f^* < \varepsilon_m^*$. Thus, at fracture, $\sigma_m = \sigma\prime_m$ and $\sigma_f = \sigma_f^*$.

$$\sigma_{cl}^* = \sigma\prime_m\cdot (1-\phi_f)+\sigma_f^*\cdot\phi_f\tag{Strength of Aligned Continuous}$$

$$\sigma_{cd}^* = \sigma\prime_m\cdot (1-\phi_f)+\sigma_f^*\cdot\phi_f\cdot (1-\frac{l_c}{2\cdot l})\tag{Aligned Discontinuous with l>l_c}$$

$$\sigma_{cd}^* = \sigma\prime_m\cdot (1-\phi_f)+\frac{l\cdot\tau_c}{d}\cdot\phi_f\tag{Aligned Discontinuous with l<l_c}$$

### Common Fibre-reinforced Composites

**GFRP** = glass fibre-reinforced composites

- fibre strong and easy to make, fibre material readily available
- cars, boats, pipes
- low modulus

**CFRP** = carbon fibre-reinforced composites

- stronger, stiffer, and less temperature sensative than GFRP
- more expensive
- susceptible to galvanic corrosion
- aircraft, sports equipment
- medium modulus

**AFRP** = aramid fibre-reinforced polymer

- high strength-to-weight ratio, ductile fibre
- thermoplastic
- creep and fatigue resistant
- armour, ropes
- high modulus

## Wood

- aesthetic, renewable, available, workable, and lightweight

- variability (due to knots etc.), moisture effects, durability (rot), fire resistance, creep, anisotropic

**Anisotropic** = weaker perpendicular to grain direction

- composed of cellulose (microfibrils), hemicellulose (matrix), lignin(matrix), and extractives (decay resistance)

### Macrostructure

**Outer Bark** = dead section

- protects living tree from elements, infestation
- varies in thickness

**Inner Bark** = stores nutrients and transports them down the tree

**Cambrium** = new growth region

- growth occurs in seasons
- during hibernation, the cambrium is converted into wood

**Sapwood** = transfers moisture and minerals (sap) from the roots to the crown, where it is converted into nutrients

- stores carbs made from photosynthesis

**Heartwood** = dead sapwood cells

- Extractives make this area more fungus-resistant

**Pith** = centre

- new roots and branches originate here

**Knots** = branches form knots in the tree

- lower branches eventually die due to lack of sunlight, and knots grow over

![Parts of wood](https://i.imgur.com/N8j7wfQ.png?1)

### Microstructure

**Tracheids** = fibres running vertically in the tree, made from wound cellulose microfibrils. Responsible for tree rigidity and for conducting food and water

- 2.5-5 mm in softwoods, 1 mm long in hardwoods

**Early Wood** = The inside of the 1 ring/year, where larger cells develop during springtime

**Late wood** = The outer part of the ring, with dense, smaller cells from summer

### Properties of Wood

- Tensile strength parallel to the grain is limited by tensile fracture of tracheids
- Compressive strength parallel to the grain is limited by buckling of tracheids
  - Compressive strength perpendicular to grain is lower than parallel to the grain.

See below equation, w/ $P_r$ = compressive strength parallel to grain, $Q_r$ = strength perpendicular to grain, and $\theta$ angle between grain and load direction

$$ N_r = \frac{P_r\cdot Q_r}{P_r\cdot sin^2\theta + Q_r\cdot cos^2\theta}\tag{Compressive strength at an angle}$$

When the moisture content decreases due to drying, strength increases because of reduced x-sectional area and increased secondary fibre bonding.

> While the tensile strength should theoretically be stronger, the presence of knots and other defects leave designers using a lower tensile strength than a compressive strength

![Wood Strength](https://i.imgur.com/EcrivTv.png?1)

### Engineering Wood Products

- can be made of smaller pieces and better property control

**Finger-jointed** = allows smaller wood pieces to be used and removal of defects

1. Finger joints machined in kiln-dried wood
2. Pieces squeezed together with structural adhesive

**Plywood** = original wood product

- Thin plies glued together w/ grain oriented perpendicularly successively. Outer plies highest quality and in long direction
- Bonded with resin glue

**Oriented strand board OSB** = strands bonded together with resin adhesive

**Glulam** = gluing together individual pieces of sawn lumber w/ finger-jointing

**Cross-laminated timber** = cross-laminating lumber w/ adhesives or fasteners. Made w/ 3-7 layers of lumber or planks

**Laminated veneer lumber LVL** = plywood, except thicker plies that all run in longitudinal direction.

## Glass

- fails by brittle fracture when stress intensity factor from tensile stress at tip of one crack exceeds fracture toughness
- Typically E = 69 GPA, strength = 69 MPa
- Made by floating, cooling, and tempering

Basic Types

1. Monolithic
2. Insulating (air layer)
3. Laminated (PVB foil)
4. Fire protection (multiple inner layers)
5. Insulating glass

## Corrosion

### Metal Corrosion

**Oxidation** = lose electrons. Site of oxidation is the anode. This is $V_1$

**Reduction** = gain electrons. This is $V_2$

$$\Delta V^0 = V_2 - V_1 - \frac{0.0592}{n}\cdot log\frac{M_1}{M_2}\tag{Nernst Equation}$$

There are a few types of metal corrosion

1. General corrosion - uniform corrosion on exposed surface
2. Galvanic corrosion - 2 metals w/ different electrode potentials are in close contact w/ an electrolyte present
3. Crevice corrosion - occurs in crevices where water becomes oxygen depleted
4. Pitting corrosion - crevice corrosion in small pits
5. Intergranular corrosion - corrosion within grain boundaries
6. Stress corrosion - corrosion in the presence of high stress levels of materials
7. Hydrogen embrittlement - hydrogen interstitially diffuses, interfering with grain-boundary movement and hence making substances more brittle

### Concrete Corrosion

**Passive Layer** = forms on steel and isolates it from oxygen (electrolyte)

- reduces corrosion if it is dense, cts and uniform

|pH of Concrete|Meaning|
|0-4|Certain Corrosion|
|4-10|Corrosion if $O_2$ present|
|10-14|No Corrosion|

**Chloride-induced corrosion** = chlorides present create an environment in which the Fe in the rebar reacts with the OH in the air

|Chloride Mass % of Cement|Corrosion Risk|
|0.2|None|
|0.2-0.4|Low|
|0.4-1|Moderate|
|>1|High|

- leads to cracking and spalling

### Corrosion Prevention

- barriers (paint)
- sacrificial anode
- galvanizing
- metallizing
- using different material
