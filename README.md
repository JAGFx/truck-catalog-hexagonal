# Truck configurator hexagonal
POC for an hexagonal architecture on Symfony

## Main purpose

This app must allow to configure a Truck.

The truck is composed with part.
Each part have some links and requirement with each other.

A part is a frame, an engine, a gearbox and / or a cab

## What should be possible

1. :construction: Have a list of all available part for a specific brand
2. :construction: Have a list of all saved truck configurations
3. :construction: Know if the configuration is valid = All part must be linked and satisfy requirements with all others.
4. :x: Save truck configuration
5. :x: Export truck configuration on `Json` file

<hr>

- [Business rules](doc/BUSINESS_RULES.md)
- Workflow
- Meaning of terms
